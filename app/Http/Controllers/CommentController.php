<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service\CommentServiceFacade;

class CommentController extends Controller
{
    public function __construct(Request $request)
    {
    	$this->user_id = $request->session()->get('id');
    }
    /**
     *add more comment of image
     *@param request: data has image_id, content
     *@return comment created
     */
    public function addComment(Request $request)
    {
    	$data = $request->data;

    	$data['user_id'] = $this->user_id;

    	$result = CommentServiceFacade::addComment( $data );
    	if ($result) {
    		return response()->json([
    			'result'     => 'OK',
    			'content'    => $result['content'],
                'username'   => $result['username'],
                'avatar'     => $result['avatar'],
                'image_id'   => $result['image_id'],
                'user_id'    => $result['user_id'],
                'id'        => $result['id']
    		]);
    	}
    	return response()->json(['result' => 'error']);
    }

    public function getComment(Request $request)
    {
    	$data = $request->data;

    	$result = CommentServiceFacade::getAllCommentOfImage( $data );

    	if ($result) {
    		return response()->json([
    			'result'	=> 'OK',
    			'comment'		=> $result
    		]);
    	}
    	return response()->json(['result' => 'error']);
    }

    public function deleteComment(Request $request)
    {
        $comment_id = $request->comment_id;

        $result = CommentServiceFacade::deleteComment( $comment_id );

        if ($result) {
            return response()->json([
                'result'    => 'OK',
                'delete'    => $result
            ]);
        }
        return response()->json(['result' => 'error']);
    }

}
