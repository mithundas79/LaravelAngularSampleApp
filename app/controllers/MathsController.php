<?php

class MathsController extends \BaseController {
    public $layout = 'layouts.main';
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $rules = array(
            'number1' => 'required|numeric',
            'number2' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->passes()) {
            $result = Input::get('number1') + Input::get('number2');
            return Response::json(array('success' => true, 'message' => 'Add successfull.', 'result' => $result));
        } else {
            // validation has failed, display error messages  
            $messages = $validator->messages();
            $errorData = array();
            foreach ($messages->all() as $message) {
                $errorData[] = $message;
            }
            $resposeData = array(
                'success' => false,
                'message' => "Failed to add",
                'data' => array('errors' => $errorData)
            );

            return Response::json($resposeData);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
