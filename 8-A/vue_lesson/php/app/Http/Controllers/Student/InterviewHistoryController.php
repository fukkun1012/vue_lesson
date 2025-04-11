<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\AbstractStudentController;
use Illuminate\Http\Request;
use App\Services\InterviewHistoryService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\UnauthorizedException;

class InterviewHistoryController extends AbstractStudentController
{
    private const CONTROLLER_NAME = '日報';

    private InterviewHistoryService $interview_history_service;

    /**
     * InterviewHistoryController constructor.
     * @param InterviewHistoryService $interview_history_service
     */
    public function __construct
    (
        InterviewHistoryService $interview_history_service
    )
    {
        $this->interview_history_service = $interview_history_service;
        parent::__construct();
    }


    public function getListByStudentId(Request $request): JsonResponse
    {
        try {
            $interview_history_list = $this->interview_history_service->getListByStudentId($this->getId());
            return response()->json($interview_history_list);
        } catch (UnauthorizedException $e) {
            return $this->errorResponse('', $e->getMessage(), 401);
        } catch (\Exception $e) {
            return $this->errorResponse('面談履歴の取得', $e->getMessage(), 500);
        }
    }

     /**
     * 一覧表示
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $interview_history_list = $this->interview_history_service->getList();
            return response()->json($interview_history_list);
        } catch (UnauthorizedException $e) {
            return $this->errorResponse('', $e->getMessage(), 401);
        } catch (\Exception $e) {
            return $this->errorResponse('面談履歴の取得', $e->getMessage(), 500);
        }
    }

    /**
     * 詳細表示
     * @return JsonResponse
     */
    public function show(Request $request, int $id): JsonResponse
    {
        try {
            $result = $this->interview_history_service->getDetail($id);
            if ($result) {
                return response()->json($result);
            }
            return $this->errorResponse('', '面談履歴が見つかりません', null, 404);
        } catch (UnauthorizedException $e) {
            return $this->errorResponse('', $e->getMessage(), 401);
        } catch (\Exception $e) {
            return $this->errorResponse('面談履歴の取得', $e->getMessage(), 500);
        }
    }

    /**
     * 登録処理
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        try {
            if ($this->interview_history_service->save($request)) {
                return $this->successResponse(self::CONTROLLER_NAME . 'を登録');
            }
            return $this->errorResponse(self::CONTROLLER_NAME . 'の登録');
        } catch (UnauthorizedException $e) {
            return $this->errorResponse('', $e->getMessage(), 401);
        } catch (\Exception $e) {
            return $this->errorResponse(self::CONTROLLER_NAME . 'の登録', $e->getMessage(), 500);
        }
    }

    /**
     * 更新処理
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        try {
            if ($this->interview_history_service->save($request, $id)) {
                return $this->successResponse(self::CONTROLLER_NAME . 'を更新');
            }
            return $this->errorResponse(self::CONTROLLER_NAME . 'の更新');
        } catch (UnauthorizedException $e) {
            return $this->errorResponse('', $e->getMessage(), 401);
        } catch (\Exception $e) {
            return $this->errorResponse(self::CONTROLLER_NAME . 'の更新', $e->getMessage(), 500);
        }
    }
}

