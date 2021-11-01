<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        session_start();
        $arr = $_SESSION;
        return view('index', compact('arr'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        session_start();
        $arr = $_SESSION;
        if ($arr == null) {
            $arr['id'] = [];
            $arr['name'] = [];
            $arr['phone'] = [];
            $arr['email'] = [];
        }
        if ($arr['id'] == null) {
            array_push($arr['id'], 0);

        } else {
            $id = count($arr['id']);
            array_push($arr['id'], $id);
        };
        array_push($arr['name'], $name);
        array_push($arr['phone'], $phone);
        array_push($arr['email'], $email);
        $_SESSION = $arr;
        return view('index', compact('arr'));
    }


    public function show($id)
    {
        session_start();
        $name = $_SESSION['name'][$id];
        $phone = $_SESSION['phone'][$id];
        $email = $_SESSION['email'][$id];
        return view('show', compact(['id', 'name', 'phone', 'email']));
    }


    public function edit($id)
    {
        session_start();
        $name = $_SESSION['name'][$id];
        $phone = $_SESSION['phone'][$id];
        $email = $_SESSION['email'][$id];
        return view('edit', compact(['id', 'name', 'phone', 'email']));
    }


    public function update(Request $request, $id)
    {
        session_start();
        $arr = $_SESSION;
        $arr['name'][$id ] = $request->name;
        $arr['phone'][$id ] = $request->phone;
        $arr['email'][$id ] = $request->email;
        $_SESSION = $arr;
        return view('index', compact('arr'));
    }


    public function delete($id)
    {
        session_start();
        $arr = $_SESSION;
        array_splice($arr['id'],$id,1);
        array_splice($arr['name'],$id,1);
        array_splice($arr['email'],$id,1);
        array_splice($arr['phone'],$id,1);
        $_SESSION = $arr;
        return view('index', compact('arr'));
    }
}
