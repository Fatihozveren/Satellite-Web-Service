<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use App\Helper\Enum\ResponseCodes;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LaunchPad;
use App\Models\Satellite;
use App\Models\Status;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiResponseController extends BaseController
{

    /**
     * @OA\Get (
     *     tags={"Satellites"},
     *     path="/api/sattelites/all_satellites",
     *     description="Get all satellites information",
     *     @OA\Response(response="200", description="Ok"),
     *     @OA\Response(response="400", description="Bad Request"),
     *     @OA\Response(response="401", description="Unauthorized"),
     *     @OA\Response(response="404", description="Not Found"),
     *     @OA\Response(response="500", description="Server Error"),
     * )
     */

    public function getAllSatellites()
    {
        $satellite = Satellite::all();
        if ( count($satellite) > 0) {
                return $this->sendResponse(
                    $satellite,
                    ResponseCodes::getSuccessMessages('OK')
                );
        } else {
            return $this->sendError(
                'Satellite data can not found',
                ResponseCodes::getErrorMessages('REQUIRED_PARAMETER'),
                ResponseCodes::NOT_FOUND);
        }
    }

    /**
     * @OA\Get (
     *     tags={"Satellites"},
     *     path="/api/launchpad_satellites",
     *     description="Get satellites by launcpad id",
     *     @OA\Parameter(
     *      name="launchpad_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *      ),
     *     @OA\Response(response="200", description="Ok"),
     *     @OA\Response(response="400", description="Bad Request"),
     *     @OA\Response(response="401", description="Unauthorized"),
     *     @OA\Response(response="404", description="Not Found"),
     *     @OA\Response(response="500", description="Server Error"),
     * )
     */

    public function getLaunchpadSatellites(Request $request)
    {
        $satellites = Satellite::where('launchpad_id', $request->launchpad_id)->get();
        if ( count($satellites) > 0) {
            return $this->sendResponse(
                $satellites,
                ResponseCodes::getSuccessMessages('OK')
            );
        } else {
            return $this->sendError(
                'Satellites data can not found',
                ResponseCodes::getErrorMessages('REQUIRED_PARAMETER'),
                ResponseCodes::NOT_FOUND);
        }
    }

    /**
     * @OA\Get (
     *     tags={"Categories"},
     *     path="/api/categories/all_categories",
     *     description="Get all categories information",
     *     @OA\Response(response="200", description="Ok"),
     *     @OA\Response(response="400", description="Bad Request"),
     *     @OA\Response(response="401", description="Unauthorized"),
     *     @OA\Response(response="404", description="Not Found"),
     *     @OA\Response(response="500", description="Server Error"),
     * )
     */

    public function getAllCategories()
    {
        $categories = Category::all();
        if ( count($categories) > 0) {
            return $this->sendResponse(
                $categories,
                ResponseCodes::getSuccessMessages('OK')
            );
        } else {
            return $this->sendError(
                'Categories data can not found',
                ResponseCodes::getErrorMessages('REQUIRED_PARAMETER'),
                ResponseCodes::NOT_FOUND);
        }
    }

    /**
     * @OA\Get (
     *     tags={"Status"},
     *     path="/api/all_status",
     *     description="Get all status information",
     *     @OA\Response(response="200", description="Ok"),
     *     @OA\Response(response="400", description="Bad Request"),
     *     @OA\Response(response="401", description="Unauthorized"),
     *     @OA\Response(response="404", description="Not Found"),
     *     @OA\Response(response="500", description="Server Error"),
     * )
     */

    public function getAllStatus()
    {
        $status = Status::all();
        if ( count($status) > 0) {
            return $this->sendResponse(
                $status,
                ResponseCodes::getSuccessMessages('OK')
            );
        } else {
            return $this->sendError(
                'Status data can not found',
                ResponseCodes::getErrorMessages('REQUIRED_PARAMETER'),
                ResponseCodes::NOT_FOUND);
        }
    }

    /**
     * @OA\Get (
     *     tags={"Launchpads"},
     *     path="/api/all_launchpads",
     *     description="Get all launchpads information",
     *     @OA\Response(response="200", description="Ok"),
     *     @OA\Response(response="400", description="Bad Request"),
     *     @OA\Response(response="401", description="Unauthorized"),
     *     @OA\Response(response="404", description="Not Found"),
     *     @OA\Response(response="500", description="Server Error"),
     * )
     */

    public function getAllLaunchpads()
    {
        $launchpads = LaunchPad::all();
        if ( count($launchpads) > 0) {
            return $this->sendResponse(
                $launchpads,
                ResponseCodes::getSuccessMessages('OK')
            );
        } else {
            return $this->sendError(
                'Launchpads data can not found',
                ResponseCodes::getErrorMessages('REQUIRED_PARAMETER'),
                ResponseCodes::NOT_FOUND);
        }
    }

}
