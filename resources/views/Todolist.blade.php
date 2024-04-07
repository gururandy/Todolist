<x-header></x-header>
    <div class="container p-3 bg-dark text-white text-center">
        <h3>ToDo List</h3>
        <div class="row p-3 justify-content-center">
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-sm-2 col-md-3 col-lg-3">
                        <button type="button" id="AddTodolistModal" class="btn btn-dark todobtn" data-toggle="modal" data-target="#exampleModal">Add Todo list</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
        </div>
            <div class="row p-3 justify-content-center">
                <div class="col-sm-2 col-md-2 col-lg-2"></div>
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="row justify-content-center">
                        <div class="tododetails" id="tododetails">
                            @foreach ($GetTodolistDetails as $TodoList)
                            @if($TodoList->completed_status != 'completed')
                            <table style='height:45px;width:100%;border-radius:20px;box-shadow: 9px 21px 30px -19px rgb(0 0 0 / 63%);background-color: #120f0f;margin-top: 10px;' cellpadding='0' cellspacing='0'>
                                <tbody>
                                    <tr>
                                        <td style='width: 5%;'>
                                            <input class='form-check-input' type='checkbox' value='{{ $TodoList->id }}' name='Completecheck[]' onclick="checkboxSelected()">
                                        </td>
                                        <td style='width: 70%;text-align: left;font-size: 16px;' onclick="showFullDetails({{ $TodoList->id }})">
                                        {{ $TodoList->title }} - status ({{$TodoList->completed_status}})
                                        </td>
                                        <td style='width: 5%;'>
                                            <i class='fa-solid fa-trash' style="cursor: pointer;" onclick='DeleteTodoListfun({{ $TodoList->id }})'></i>
                                        </td>
                                        <td style='width: 5%;'>
                                            <i class='fa-solid fa-pen' style="cursor: pointer;" onclick='EditTodoListfun({{ $TodoList->id }})'></i>
                                        </td>
                                        <td style='width: 5%;'></td>
                                    </tr>
                                </tbody>
                            </table>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2"></div>
            </div>
            <div class="row p-3 justify-content-center" id="completedbtn" style="display:none;">
                <div class="col-sm-2 col-md-2 col-lg-2"></div>
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <button type="button" class="btn btn-dark todobtn" onclick="ChangeTodolistStatus()">Completed</button>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2"></div>
            </div>
        
    </div>
<x-footer></x-footer>