<?php

namespace App\Http\Controllers;

use App\Models\DataHub;
use Illuminate\Http\Request;
use App\Models\MetaData;

class DataHubController extends Controller
{

    public function create($project, $module, Request $request) {

        /* Extract data from the request */
        $data = $request->all();

        /* Check if the module already exists for this project */
        $existingRecord = DataHub::where('project', $project)
        ->where('module', $module)
        ->first();

        /* Get the count of modules for this project */
        $moduleCount = DataHub::where('project', $project)->count();

        /* Check if adding a new module would exceed the limit */
        if ($moduleCount >= 10 && !$existingRecord) {
            return response()->json([
                'status' => 400,
                'message' => 'A project cannot have more than 10 modules.',
            ], 400);
        }

        /* If the module already exists, proceed without error */
        if (!$existingRecord && $moduleCount < 10) {
            /* Create the new record in DataHub */
            $existingRecord = DataHub::create([
                'project' => $project,
                'module' => $module
            ]);
        }

        /* Get the count of related MetaData records for the project */
        $foundDataLength = MetaData::where('project_id', $existingRecord->id)->count();

        if ($foundDataLength < 100) {
            /* Create new MetaData record if less than 100 exist */
            $createdMetadata = MetaData::create([
                'project_id' => $existingRecord->id,
                'meta_data' => json_encode($data), /* Store JSON data */
            ]);

            if ($createdMetadata) {
                $newData = $data;
                $newData['id'] = $createdMetadata->id;
                $newData['created_at'] = $createdMetadata->created_at;
                $newData['updated_at'] = $createdMetadata->updated_at;
                return response()->json([
                    'status' => 200,
                    'message' => 'Data added successfully',
                    'data' => $newData
                ], 200);
            }
        } else {
            /* Return error if data limit exceeded */
            return response()->json([
                'status' => 400,
                'message' => 'Data limit exceeded',
            ], 400);
        }

    }

    public function getDataList($project, $module, Request $request) {
        /* Set default values for limit and page using the null coalescing operator */
        $limit = (int) ($request->limit ?? 10);
        $page = (int) ($request->page ?? 1);

        /* Get project detail along with metaDatas count */
        $projectDetail = DataHub::where('module', $module)
        ->where('project', $project)
        ->withCount('metaDatas')
        ->first();

        /* Initialize response object */
        $responseObj = new \stdClass();
        $responseObj->total_records = 0;
        $responseObj->total_pages = 0;
        $responseObj->current_page = $page;
        $responseObj->per_page = $limit;
        $responseObj->results = [];

        /* Check if projectDetail exists */
        if ($projectDetail) {
            $project_id = $projectDetail->id;

            /* Get paginated data from MetaData */
            $datas = MetaData::where('project_id', $project_id)
            ->orderBy('created_at', 'desc')
            ->skip(($page - 1) * $limit)
            ->take($limit)
            ->get();

            /* Get the count of related metaDatas */
            $count = $projectDetail->meta_datas_count;

            /* Calculate total pages */
            $totalPages = (int) ceil($count / $limit);

            /* Update response object with data */
            $responseObj->total_records = $count;
            $responseObj->total_pages = $totalPages;

            /* If data exists, decode meta_data and add to results */
            if ($datas->count() > 0) {
                $newRecords = [];
                foreach ($datas as $data) {
                    /* Decode the meta_data field into an associative array */
                    $json = json_decode($data->meta_data, true);

                    /* Add the id from the MetaData model to the array */
                    $json['id'] = $data->id;
                    $json['created_at'] = $data->created_at;
                    $json['updated_at'] = $data->updated_at;

                    /* Add the modified array to the newRecords array */
                    $newRecords[] = $json;
                }
                $responseObj->results = $newRecords;
            }

            /* Return the response as JSON */
            return response()->json([
                'status' => 200, 
                'message' => 'Data found',
                'data' => $responseObj
            ],200);
        }

        /* Return empty response object if no projectDetail found */
        return response()->json([
            'status' => 400, 
            'message' => 'No data found',
            'data' => $responseObj
        ],400);
    }


    public function getDetail($project, $module, $dataId) {

        /* Find the existing record in DataHub */
        $existingRecord = DataHub::where('project', $project)
        ->where('module', $module)
        ->first();

        if ($existingRecord) {
            /* Find the MetaData record based on the project_id and dataId */
            $foundData = MetaData::where('id', $dataId)
            ->where('project_id', $existingRecord->id)
            ->first();

            if ($foundData) {

                /* Decode the meta_data field into an associative array */
                $json = json_decode($foundData->meta_data, true);

                /* Add the id from the MetaData model to the array */
                $json['id'] = $foundData->id;
                $json['created_at'] = $foundData->created_at;
                $json['updated_at'] = $foundData->updated_at;


                /* Return success response with found data */
                return response()->json([
                    'status' => 200,
                    'message' => 'Success',
                    'data' => $json
                ], 200);
            }
        }

        /* Return not found response */
        return response()->json([
            'status' => 400,
            'message' => 'Record not found',
            'data' => null
        ], 400);
    }

    public function update($project, $module, $dataId, Request $request) {
        /* Extract the data from the request */
        $data = $request->json()->all();

        try {
            /* Find the existing record in DataHub */
            $existingRecord = DataHub::where('project', $project)
            ->where('module', $module)
            ->first();

            if ($existingRecord) {
                /* Find and update the MetaData record */
                $updatedData = MetaData::where('id', $dataId)
                ->where('project_id', $existingRecord->id)
                ->first();

                if ($updatedData) {
                    /* Update the meta_data field */
                    $updatedData->meta_data = json_encode($data); /* Store JSON data */
                    $updatedData->save();

                    /* Decode the meta_data field into an associative array */
                    $json = json_decode($updatedData->meta_data, true);

                    /* Add the id from the MetaData model to the array */
                    $json['id'] = $updatedData->id;
                    $json['created_at'] = $updatedData->created_at;
                    $json['updated_at'] = $updatedData->updated_at;

                    return response()->json([
                        'status' => 200,
                        'message' => 'Data updated successfully',
                        'data' => $json
                    ], 200); /* Status code 200 for success */
                }

                /* MetaData record not found */
                return response()->json([
                    'status' => 400,
                    'message' => 'Record not found',
                    'data' => null
                ], 400); /* Status code 400 for bad request */
            }

            /* DataHub record not found */
            return response()->json([
                'status' => 400,
                'message' => 'Project or module not found',
                'data' => null
            ], 400); /* Status code 400 for bad request */

        } catch (\Exception $e) {
            /* Handle any exceptions */
            return response()->json([
                'status' => 500,
                'message' => 'Internal Server Error',
                'error' => $e->getMessage()
            ], 500); /* Status code 500 for internal server error */
        }
    }


    public function patch($project, $module, $dataId, Request $request) {
        /* Extract the data from the request */
        $data = $request->json()->all();

        try {
            /* Find the existing record in DataHub */
            $existingRecord = DataHub::where('project', $project)
            ->where('module', $module)
            ->first();

            if ($existingRecord) {
                /* Find the MetaData record to update */
                $metaDataRecord = MetaData::where('id', $dataId)
                ->where('project_id', $existingRecord->id)
                ->first();

                if ($metaDataRecord) {
                    /* Decode existing meta_data */
                    $metaDataArray = json_decode($metaDataRecord->meta_data, true);

                    /* Update fields inside meta_data with new data */
                    foreach ($data as $key => $value) {
                        $metaDataArray[$key] = $value; /*  Update the specific key-value pair */
                    }

                    /* Encode the updated meta_data array back to JSON and save */
                    $metaDataRecord->meta_data = json_encode($metaDataArray);
                    $metaDataRecord->save();

                    /* Decode the meta_data field into an associative array */
                    $json = json_decode($metaDataRecord->meta_data, true);

                    /* Add the id from the MetaData model to the array */
                    $json['id'] = $metaDataRecord->id;
                    $json['created_at'] = $metaDataRecord->created_at;
                    $json['updated_at'] = $metaDataRecord->updated_at;

                    return response()->json([
                        'status' => 200,
                        'message' => 'Data updated successfully',
                        'data' => $json
                    ],200); /*  Status code 200 for success */
                }

                return response()->json([
                    'status' => 400,
                    'message' => 'MetaData record not found',
                    'data' => null
                ],400); /*  Status code 400 for bad request */
            }

            /* DataHub record not found */
            return response()->json([
                'status' => 400,
                'message' => 'Project or module not found',
                'data' => null
            ],400); /*  Status code 400 for bad request */

        } catch (\Exception $e) {
            /* Handle any exceptions */
            return response()->json([
                'status' => 500,
                'message' => 'Internal Server Error',
                'error' => $e->getMessage()
            ],500); /*  Status code 500 for internal server error */
        }
    }

    public function remove($project, $module, $dataId) {
        try {
            /* Find the existing record in DataHub */
            $existingRecord = DataHub::where('project', $project)
            ->where('module', $module)
            ->first();

            if ($existingRecord) {
                /* Find and delete the MetaData record */
                $deletedData = MetaData::where('id', $dataId)
                ->where('project_id', $existingRecord->id)
                ->first();

                if ($deletedData) {
                    /* Perform the delete operation */
                    $deletedData->delete();

                    return response()->json([
                        'status' => 200,
                        'message' => 'Data deleted successfully',
                    ], 200); /* Status code 200 for successful deletion */
                }

                return response()->json([
                    'status' => 400,
                    'message' => 'Record not found',
                ], 400); /* Status code 400 if MetaData not found */
            }

            return response()->json([
                'status' => 400,
                'message' => 'Project or module not found',
            ], 400); /* Status code 400 if DataHub not found */

        } catch (\Exception $e) {
            /* Handle any exceptions */
            return response()->json([
                'status' => 500,
                'message' => 'Internal Server Error',
                'error' => $e->getMessage()
            ], 500); /* Status code 500 for internal server error */
        }
    }

    public function deleteModule($project, $module) {
        try {

            /* Find the existing record in DataHub */
            $existingRecord = DataHub::where('project', $project)
            ->where('module', $module)
            ->first();

            if ($existingRecord) {
            
                if ($existingRecord->module == 'electronic-devices') {
                    return response()->json([
                        'status' => 400,
                        'message' => "Demo Project can't be delete!",
                    ], 400); /* Status code 400 if MetaData not found */
                }

                /* Find the existing record in DataHub */
                DataHub::where('id', $existingRecord->id)->delete();
                MetaData::where('project_id', $existingRecord->id)->delete();

                return response()->json([
                    'status' => 200,
                    'message' => 'Module and its data is deleted successfully',
                ], 200); /* Status code 200 for successful deletion */
            } else {
                return response()->json([
                    'status' => 400,
                    'message' => 'Module not found',
                ], 400); /* Status code 400 if MetaData not found */
            }

        } catch (\Exception $e) {
            /* Handle any exceptions */
            return response()->json([
                'status' => 500,
                'message' => 'Internal Server Error',
                'error' => $e->getMessage()
            ], 500); /* Status code 500 for internal server error */
        }
    }

    public function deleteProject($project) {
        try {

            /* Find the existing records in DataHub */
            $existingRecord = DataHub::where('project', $project)
            ->get();

            if ($existingRecord->isNotEmpty()) {
                /* Loop through each record */
                foreach ($existingRecord as $record) {

                    if ($record->module == 'electronic-devices') {
                        return response()->json([
                            'status' => 400,
                            'message' => "Demo Project can't be delete!",
                        ], 400); /* Status code 400 if MetaData not found */
                    }

                    DataHub::where('id', $record->id)->delete();
                    MetaData::where('project_id', $record->id)->delete();
                }
                return response()->json([
                    'status' => 200,
                    'message' => 'Project, Module and its data is deleted successfully',
                ], 200); /* Status code 200 for successful deletion */
            } else {
                return response()->json([
                    'status' => 400,
                    'message' => 'Project not found',
                ], 400); /* Status code 400 if MetaData not found */
            }

        } catch (\Exception $e) {
            /* Handle any exceptions */
            return response()->json([
                'status' => 500,
                'message' => 'Internal Server Error',
                'error' => $e->getMessage()
            ], 500); /* Status code 500 for internal server error */
        }
    }
}
