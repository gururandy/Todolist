<x-header></x-header>
    <div class="container p-3 bg-dark text-white text-center">
        <h3>ToDo List</h3>
        <div class="row p-3 justify-content-center">
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <input class="form-control searchinput" placeholder="search" name="search" id="search" value="">
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <button type="button todobtn" class="btn btn-dark">Search</button>
                    </div>
                    <div class="col-sm-2 col-md-3 col-lg-3">
                        <button type="button todobtn" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Add Todo list</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
        </div>
            <div class="row p-3 justify-content-center">
                <div class="col-sm-2 col-md-2 col-lg-2"></div>
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="row justify-content-center">
                        No Data
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2"></div>
            </div>
        
    </div>
<x-footer></x-footer>