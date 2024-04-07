function InsertTodolist(){
    var title           =   $('#title').val();
    var description     =   $('#description').val();
    var _token          =   $('#_token').val();

    if(title == ""){
        alert("Please Enter a title");
        return false;
    }else if(description == ""){
        alert("Please Enter a Description");
        return false;
    }
    $.ajax({
        type:'POST',
        url:'InsertTodolistDetails',
        data:{'_token':_token,title:title,description:description},
        success:function(Result){
           if(Result['status'] == 'Success'){
                $('#exampleModal').modal('hide');
                window.location.reload(true);
           }else{
                alert("Please try again later");
           }
           
        }
    })

}

function EditTodoListfun(id){
    var _token          =   $('#_token').val();
    var id              =   id;
    $.ajax({
        type:'POST',
        url:'EditTodolistDetails',
        data:{'_token':_token,id:id},
        success:function(Result){
            var Results =   JSON.parse(Result)
           if(Results['status'] == 'success'){
                $('#EditTodoModal').modal('show');
                $('#editid').val(Results['id']);
                $('#edittitle').val(Results['title']);
                $('#editdescription').val(Results['description']);
           }else{
                alert("Please try again later");
           }
           
        }
    })
}

function UpdateTodolist(){
    var _token      =   $('#_token').val();
    var id          =   $('#editid').val();
    var title       =   $('#edittitle').val()
    var description =   $('#editdescription').val();
    $.ajax({
        type:'POST',
        url:'UpdateTodolist',
        data:{'_token':_token,id:id,title:title,description:description},
        success:function(Result){
            var Results =   JSON.parse(Result)
           if(Results['status'] == 'success'){
                $('#EditTodoModal').modal('hide');
                window.location.reload(true);
           }else{
                alert("Please try again later");
           }
           
        }
    })
}

function DeleteTodoListfun(id){
    $('#DeleteTodoModal').modal('show');
    $('#deleteid').val(id);
}

function DeleteTodoData(){
    var deleteid    =   $('#deleteid').val();
    var _token      =   $('#_token').val();
    $.ajax({
        type:'POST',
        url:'DeleteTodolist',
        data:{'_token':_token,deleteid:deleteid},
        success:function(Result){
            var Results =   JSON.parse(Result)
           if(Results['status'] == 'success'){
            $('#DeleteTodoModal').modal('hide');
                window.location.reload(true);
           }else{
                alert("Please try again later");
           }
           
        }
    })
}

function checkboxSelected(){
    if ($('input[name="Completecheck[]"]:checked').length > 0) {
        $('#completedbtn').show();
    } else {
        $('#completedbtn').hide();
    }
}

function ChangeTodolistStatus(){
    var checkedValues = [];
    var _token      =   $('#_token').val();
    $('input[name="Completecheck[]"]:checked').each(function() {
        checkedValues.push($(this).val());
    });

    $.ajax({
        type:'POST',
        url:'updatestatus',
        data:{'_token':_token,checkedValues:checkedValues},
        success:function(Result){
            var Results =   JSON.parse(Result)
           if(Results['status'] == 'success'){
                window.location.reload(true);
           }else{
                alert("Please try again later");
           }
           
        }
    })
   
}

function showFullDetails(id){
    var _token      =   $('#_token').val();
    $.ajax({
        type:'POST',
        url:'Showsingletodolist',
        data:{'_token':_token,id:id},
        success:function(Result){
            var Results =   JSON.parse(Result)
           if(Results['status'] == 'success'){
            $('#ShowdoModal').modal('show');
            $('#exampleModaltitle').append(Results['title']);
            $('#descriptions').append(Results['description']);
           }else{
                alert("Please try again later");
           }
           
        }
    })
}
