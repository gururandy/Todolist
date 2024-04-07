<!DOCTYPE html>
<html>
    <head>
        <title>Todo List</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="../bootstrap-5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"/>
        <style>
            .searchinput{
                border: #424242 !important;
                width: 100%;
            }
            .todobtn{
                border-radius: 10px !important;
                background-color: #1e1a1a;
                box-shadow: 9px 21px 30px -19px rgb(0 0 0 / 63%);
            }
            .modal-content{
                color: #fff;
                background-color: #1e1a1a;
                box-shadow: 9px 21px 30px -19px rgb(0 0 0 / 63%);
            }
            .tododetails{
                height: auto;
                width: 70%;
                border-radius: 20px;
                background-color: #1e1a1a;
                color: #ffffff;
                box-shadow: 9px 21px 30px -19px rgb(0 0 0 / 63%);
                padding: 10px;
            }
        </style>
    </head>
<body style="padding: 0px;margin:0px;background-color: rgb(48, 48, 48) !important;">
    @csrf
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">