<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
        <head>
            <!-- php artisan serve  http://localhost:8000/-->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>Laravel</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <!--style>
            </style-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>

        <body>
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Clients list</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Classes list</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="flex-center position-ref full-height">
                                <div class="content">
                                    <div class="title m-b-md">
                                        <button type="button" class="btn btn-success btn-sm ml-4" id="getAllClients">Get all</button>
                                    </div>

                                    <p id="getAllClientsData"></p>

                                    <div class="title m-b-md">
                                        <button type="button" class="btn btn-primary btn-sm ml-3" id="showFormForNewClient">Add new</button>
                                    </div>

                                    <form id="formAddClients">
                                        <div class="form-group row">
                                            <label for="name-input" class="col-2 col-form-label">1st name</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" id="name-input" name="first_name" >
                                            </div>
                                            <label for="name-input" class="col-2 col-form-label">lst name</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" id="last-name-input" name="last_name">
                                            </div>
                                            <button type="button" class="btn btn-primary btn-sm ml-3" id="addNewClient">Add</button>
                                            <button type="button" class="btn btn-primary btn-sm ml-3" id="hideFormForNewClient">Hide</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="title m-b-md">
                                <button type="button" class="btn btn-success btn-sm ml-4" id="getAllClases">Get all</button>
                            </div>
                            <p id="getAllClasesData"></p>

                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <h2 class="text-center">Table for trainers</h2>
                    <form id="formAddReccuringClases" style="background-color: #98cbe8">

                            <div class="form-group">
                                <label for="clas-name-input" class="col-form-label">Class Name</label>
                                <select class="form-control" id="clas-name-input" name="clas-name">
                                    <option>Boxing</option>
                                    <option>Swimming</option>
                                    <option>Running</option>
                                    <option>Yoga</option>
                                    <option>Fitness</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="clas-start-date-input" class="col-form-label">Class Start Date</label>
                                <input class="form-control" type="date" value='2018-02-15' id="clas-start-date-input" name="clas-start-date" >
                            </div>

                            <div class="form-group">
                                <label for="clas-end-date-input" class="col-form-label">Class End Date</label>
                                <input class="form-control" type="date" value='2018-02-20' id="clas-end-date-input" name="clas-end-date" >
                            </div>

                            <div class="form-group">
                                <label for="clas-start-time-input" class="col-form-label">Class Start Time</label>
                                <input class="form-control " type="time" id="clas-start-time-input" name="clas-start-time" value="08:30">
                            </div>

                            <div class="form-group">
                                <label for="clas-duration-input" class="col-form-label">Class Duration</label>
                                <input class="form-control " type="time" id="clas-duration-input" name="clas-duration" value="01:30">
                            </div>

                            <div class="form-group">
                                <label for="exampleSelect2">Repeat On field</label>
                                <select multiple class="form-control" id="exampleSelect2" name="repeat-on-field">
                                    <option>Monday</option>
                                    <option>Tuesday</option>
                                    <option>Wednesday</option>
                                    <option>Thursday</option>
                                    <option>Friday</option>
                                    <option>Saturday</option>
                                    <option>Sunday</option>
                                </select>
                            </div>

                            <button type="button" class="btn btn-primary ml-3" id="addNewRecClass">Add</button>
                            <button type="button" class="btn btn-primary ml-3" id="hideFormForNewClient">Hide</button>
                    </form>
                    <br>
                    <button type="button" class="btn btn-primary ml-3" id="hideFormForNewClient">Show form for add|edit class</button>
                    <br>
                </div>
            </div>

        <div class="row">
            <table class="table table-bordered table-sm" id="mainTableClas">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Class Name</th>

                        <th scope="col">Clients Assigned</th>
                        <th scope="col">Assign Clients</th>
                        <th scope="col">Edit Class</th>
                        <th scope="col">Delete Clas</th>
                    </tr>
                </thead>
                <tbody id="tableClases">

                </tbody>
            </table>

        </div>
    </div>


            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>


            <script type="text/javascript">

                $(document).ready(function() {
                    showTableClass();

                    function fillClientSelectInReclasTable(sel) {
                        var options=sel;
                        $("#tableClases").find("option").remove();

                        $.ajax({
                            url: '{{ url('clients')  }}',
                            type: 'GET',
                            data: {_token: $("input[name=_token]").val()},
                            success: function (response) {
                                $.each( response, function( key, value ) {
                                    options.append($("<option />").val(value.id).text(value.first_name+' '+value.last_name));
                                })
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            }
                        });
                    }

/* Insert assigned clients to db  BEGIN****/
                    $(document).on('click', '.assignClient', function () {
                        var name = $(this).parent().children(".selAssignedClient").val();
                        console.log("name",name);
                        $.ajax({
                            url: '{{ url('reclases')  }}',
                            type: 'POST',

                            data: {_token: $("input[name=_token]").val(),
                                clas_date       :data_for_insert_to_db.clas_date
                            },

                            success: function (response) {
                                console.log("добавлено",response);
                                showTableClass();

                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },
                        });
                        //var field = $('#formAddReccuringClases').find("select[name='repeat-on-field']").val();
                        // var input = $("#tableClases").find("select[name='selectAssignedClient']").val();

                        //$(this).parent().children(".selAssignedClient").attr('disabled', false);

                            //alert(100);




                        //selectAssignedClient
                        alert (100);
                    })

/* Insert assigned clients to db END****/
                    function getDatesClases(obj_date_start, obj_date_end, repeat_on_field) {
                        var a = obj_date_start.clone();
                        var b = obj_date_end.clone();
                        var dif = b.diff(a, 'days');
                        var ar = [];
                        var obj_date_start_clone = obj_date_start.clone();
                        var arr_with_dates_from_repeat_on_field=[];

                        // Составляем массив объектов: [{15.02.18:Mond}, ...]
                        for(var i=0;i<=dif;i++) {
                            var ob = {};
                            ob.date=obj_date_start_clone.format('YYYY:MM:DD');
                            ob.day = obj_date_start_clone.format('dddd');
                            arr_with_dates_from_repeat_on_field.push(ob);
                            obj_date_start_clone.add(1, 'days');
                        }

                        for(arr in arr_with_dates_from_repeat_on_field) {
                            for (yy in repeat_on_field){
                                if(arr_with_dates_from_repeat_on_field[arr].day===(repeat_on_field[yy])) {
                                    var ob = {};
                                    ob['date'] = arr_with_dates_from_repeat_on_field[arr].date;
                                    ar.push(ob);
                                }
                            }
                        }
                        return ar;
                    }

                    function setStartEndDateToMomentObject(clas_date) {
                        var arr_date   = clas_date.split('-');
                        var year = Number(arr_date[0]);
                        var day = arr_date[2];
                        var month = Number(arr_date[1])-1 ;

                        obj_date = moment().set({'year':year, 'month':month, 'date':day});
                        return(obj_date);
                    }

                    $("#formAddClients").hide();

/**Add new client BEGIN*****************************************************************/
                    function getDataFromForm () {
                        //var format = 'YYYY-YY-DD';
                        var clas_name_input = $("#formAddReccuringClases").find("select[name='clas-name']").val();
                        var clas_start_time = $("#formAddReccuringClases").find("input[name='clas-start-time']").val();
                        var clas_duration =   $("#formAddReccuringClases").find("input[name='clas-duration']").val();
                        var repeat_on_field = $('#formAddReccuringClases').find("select[name='repeat-on-field']").val();
                        var clas_end_date   = $("#formAddReccuringClases").find("input[name='clas-end-date']").val();
                        //console.log("clas_end_date", moment(moment(clas_end_date, "YYYY-MM-DD").add(5,'days')));
                        var clas_start_date = $("#formAddReccuringClases").find("input[name='clas-start-date']").val();

                        var obj_date_start = setStartEndDateToMomentObject(clas_start_date);
                        var obj_date_end = setStartEndDateToMomentObject(clas_end_date);

                        var clas_dates = getDatesClases(obj_date_start, obj_date_end, repeat_on_field);

                        var arrWithDataFromForm={
                            clas_name_input:   clas_name_input,
                            clas_start_time:   clas_start_time,
                            clas_duration:     clas_duration,
                            repeat_on_field:   repeat_on_field,
                            clas_end_date:     clas_end_date,
                            clas_start_date:   clas_start_date,
                            clas_date:         clas_dates
                        }
                        ;

                        return arrWithDataFromForm;
                    }

                    /*saveAfterEditTableClas begin******************************************************************/
                    $(document).on('click', '.saveAfterEditTableClas',function () {
                        //var id = $(this).parent().find("input[name='first_name']").data('id') ;
                        //var btn_edit = $(this).parent().children(".saveAfterEditClient");
                        var clas_name = $(this).parent().parent().children().children(".itemClassName").val();
                        var clas_date = $(this).parent().parent().children().children(".itemClassDate").val();
                        var clas_duration = $(this).parent().parent().children().children(".itemClassDuration").val();
                        var clas_start_time = $(this).parent().parent().children().children(".itemClassStartTime").val();

                        var last_name = $(this).parent().find("input[name='last_name']");
                        var id = $(this).parent().parent().data('id');

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'PUT',
                            url: '{{ url('reclases')  }}' +'/'+ id,
                            data: {_token: $("input[name=_token]").val(), clas_name:clas_name, clas_date:clas_date, clas_duration:clas_duration, clas_start_time:clas_start_time},
                            success: function (response) {
                                $(this).parent().parent().children().children(".itemClassDate").attr('disabled', true);
                                $(this).parent().parent().children().children(".itemClassStartTime").attr('disabled', true);
                                $(this).parent().parent().children().children(".itemClassDuration").attr('disabled', true);
                                $(this).parent().parent().children().children(".itemClassName").attr('disabled', true);
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },


                        });
                    })
                    /*saveAfterEditTableClas end********************************************************************/


                    /* Edit class begin***************************************************************************/
                    $(document).on('click', '.editTableClas',function () {
                        $(this).parent().parent().children().children(".itemClassDate").attr('disabled', false);
                        $(this).parent().parent().children().children(".itemClassStartTime").attr('disabled', false);
                        $(this).parent().parent().children().children(".itemClassDuration").attr('disabled', false);
                        $(this).parent().parent().children().children(".itemClassName").attr('disabled', false);
                        $(this).parent().parent().children().children(".assignClient").attr('disabled', false);
                        sel=$(this).parent().parent().children().children(".selAssignedClient");
                        sel.attr('disabled', false);
                        fillClientSelectInReclasTable(sel);
                    })
                    /* Edit class end*****************************************************************************/

                    /* Delete class begin***************************************************************************/
                    $(document).on('click', '.deleteTableClas',function () {
                        var id = $(this).parent().parent().data('id');
                        //var id = $(this).parent().parent().find("tr[name='inputTableClas']").data('id') ;
                        //console.log("ableClas", $(this).parent().parent().data('id'));

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'delete',
                            url: '{{ url('reclases')  }}' +'/'+ id,

                            data: {_token: $("input[name=_token]").val()},
                            success: function (response) {
                                showTableClass();
                                //div_remove_from_dom.remove();
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },
                        });

                        /*
                        console.log("99999",$(this).parent().parent().children());
                        $(this).parent().parent().children().children(".itemClassDate").attr('disabled', false);
                        $(this).parent().parent().children().children(".itemClassStartTime").attr('disabled', false);
                        $(this).parent().parent().children().children(".itemClassDuration").attr('disabled', false);
                        $(this).parent().parent().children().children(".itemClassName").attr('disabled', false);
                        */
                    })
                    /* Delete class end*****************************************************************************/

                    /* Show table class begin******************/
                    function showTableClass() {
                        var data_for_insert_to_db=getDataFromForm();
                        // console.log("data_for_insert_to_db",data_for_insert_to_db.clas_end_date);
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: '{{ url('reclases')  }}',
                            type: 'GET',
/*
                            data: {_token: $("input[name=_token]").val(),
                                clas_name_input :data_for_insert_to_db.clas_name_input,
                                clas_start_time :data_for_insert_to_db.clas_start_time,
                                clas_duration   :data_for_insert_to_db.clas_duration,
                                repeat_on_field :data_for_insert_to_db.repeat_on_field,
                                clas_end_date   :data_for_insert_to_db.clas_end_date,
                                clas_start_date :data_for_insert_to_db.clas_start_date,
                                clas_date       :data_for_insert_to_db.clas_date
                            },
*/

                            success: function (response) {
                                //console.log("добавлено", response);
                                $("#tableClases").find("tr[name='inputTableClas']").remove();
                                $.each( response, function( key, value ) {

                                    //console.log("response", response);
                                    $('#tableClases').append("<tr name='inputTableClas' data-id='"+value.id+"'>" +
                                        "<td><input style='' name='' class='itemClassDate' disabled value='"+ value.clas_date +"'/></td>" +
                                        "<td><input style='' name='' class='itemClassStartTime' disabled value='"+ value.clas_start_time +"'/></td>" +
                                        "<td><input style='' name='' class='itemClassDuration ' disabled value='"+ value.clas_duration +"'/></td>" +
                                        "<td><input style='' name='' class='itemClassName' disabled value='"+ value.clas_id +"'/></td>" +
                                        "<td><input style='' name='' class=' ' disabled /></td>" +



                                        "<td>" +
                                            "<button type='button' class='btn btn-success btn-sm ml-1 assignClient' disabled>Assign</button>" +
                                            "<select class='custom-select selAssignedClient' multiple size='2' name='selectAssignedClient' disabled></select>"+
                                        "</td>"+
                                        "<td>" +
                                            "<button type='button' class='btn btn-primary btn-sm ml-1 editTableClas'>Edit</button>" +
                                            "<button type='button' class='btn btn-primary btn-sm ml-1 saveAfterEditTableClas'>Save</button>" +
                                        "</td>"+
                                        "<td><button type='button' class='btn btn-danger btn-sm ml-1 deleteTableClas'>Delete</button></td></tr>"

                                    );


                                    /*
                                    $('#getAllClientsData').append("<div class='div_for_item_clients'>" +
                                        "<input style='display: block' name='first_name' class='itemClient st_name' data-id='"+value.id+"' disabled value='"+value.first_name+"'/>" +
                                        "<input style='display: block' name='last_name' class='itemClient lst_name' data-id='"+value.id+"' disabled value='"+value.last_name+"' />"+
                                        "<button type='button' class='btn btn-primary btn-sm ml-1 editNewClient' >Edit</button>"+
                                        "<button type='button' class='btn btn-danger btn-sm ml-1 deleteNewClient'>Delete</button>"+
                                        "<button type='button' class='btn btn-success btn-sm ml-1 saveAfterEditClient' disabled>Save</button></div>"
                                    );*/
                                })



                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },
                        });

                    };
                    /**Show table class END*****************************************************************/



/* Add New rec class begin******************/
                    $('#addNewRecClass').click(function (e) {
                        var data_for_insert_to_db=getDataFromForm();

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: '{{ url('reclases')  }}',
                            type: 'POST',

                            data: {_token: $("input[name=_token]").val(),
                                clas_name_input :data_for_insert_to_db.clas_name_input,
                                clas_start_time :data_for_insert_to_db.clas_start_time,
                                clas_duration   :data_for_insert_to_db.clas_duration,
                                repeat_on_field :data_for_insert_to_db.repeat_on_field,
                                clas_end_date   :data_for_insert_to_db.clas_end_date,
                                clas_start_date :data_for_insert_to_db.clas_start_date,
                                clas_date       :data_for_insert_to_db.clas_date
                            },
                            success: function (response) {
                                console.log("добавлено",response);
                                showTableClass();

                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },
                        });

                    });
/**Add new reccuring class END*****************************************************************/


/**Show all clases BEGIN *************************************************************/
                    $('#getAllClases').click(function () {
                        //alert(100);
                        $.ajax({
                            url: '{{ url('clases')  }}',
                            type: 'GET',
                            data: {_token: $("input[name=_token]").val()},
                            success: function (response) {

                                $('.divForItemClases').remove();
                                $.each( response, function( key, value ) {
                                    $('#getAllClasesData').append("<div class='divForItemClases'>" +
                                        "<input style='display: block' name='first_name' class='itemClient st_name' data-id='"+value.id+"' disabled value='"+value.name+"'/>" +
                                        "</div>"
                                    );
                                })
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            }
                        });
                    });

/**Show all CLASES END *************************************************************/


/**Show all classess BEGIN *************************************************************/
                    $('#getAllClients').click(function () {
                        //alert(100);
                        $.ajax({
                            url: '{{ url('clients')  }}',
                            type: 'GET',
                            data: {_token: $("input[name=_token]").val()},
                            success: function (response) {
                                $('.div_for_item_clients').remove(),
                                $.each( response, function( key, value ) {
                                    $('#getAllClientsData').append("<div class='div_for_item_clients'>" +
                                        "<input style='display: block' name='first_name' class='itemClient st_name' data-id='"+value.id+"' disabled value='"+value.first_name+"'/>" +
                                        "<input style='display: block' name='last_name' class='itemClient lst_name' data-id='"+value.id+"' disabled value='"+value.last_name+"' />"+
                                        "<button type='button' class='btn btn-primary btn-sm ml-1 editNewClient' >Edit</button>"+
                                        "<button type='button' class='btn btn-danger btn-sm ml-1 deleteNewClient'>Delete</button>"+
                                        "<button type='button' class='btn btn-success btn-sm ml-1 saveAfterEditClient' disabled>Save</button></div>"
                                    );
                                })
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            }
                        });
                    });

/**Show all CLASSES END *************************************************************/
                    $('#hideFormForNewClient').click(function () {
                        $('#formAddClients').hide();
                    });

                    $('#showFormForNewClient').click(function () {
                        $('#formAddClients').show();
                    })
/**Add new client BEGIN*****************************************************************/
                    $('#addNewClient').click(function (e) {
                        console.log("99",e);
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var first_name = $("#formAddClients").find("input[name='first_name']").val();
                        var last_name = $("#formAddClients").find("input[name='last_name']").val();
                        // console.log("first_name0---",first_name);

                        $.ajax({
                            url: '{{ url('clients')  }}',
                            type: 'POST',

                            data: {_token: $("input[name=_token]").val(), first_name:first_name, last_name:last_name},
                            success: function (response) {
                                alert("добавлено");
                                //response[0].id;
                                var id =response;
                                $('#getAllClientsData').append("<div class='div_for_item_clients'>" +
                                    "<input style='display: block' name='first_name' class='itemClient st_name' data-id='"+id+"' disabled value='"+first_name+"'/>" +
                                    "<input style='display: block' name='last_name' class='itemClient lst_name' data-id='"+id+"' disabled value='"+last_name+"' />"+
                                    "<button type='button' class='btn btn-primary btn-sm ml-1 editNewClient' >Edit</button>"+
                                    "<button type='button' class='btn btn-danger btn-sm ml-1 deleteNewClient'>Delete</button>"+
                                    "<button type='button' class='btn btn-success btn-sm ml-1 saveAfterEditClient' disabled>Save</button></div>"
                                );
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },
                        });
                        /*
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });*/
                    });
/**Add new client END*****************************************************************/


/*DELETE CLIENT BEGIN***************************************************/
                    $(document).on('click', '.deleteNewClient',function () {
                        var id = $(this).parent().find("input[name='first_name']").data('id') ;
                        var div_remove_from_dom = $(this).parent();
                        //console.log("div_remove_from_dom-", div_remove_from_dom);
                        //console.log("id-",id);

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'delete',
                            url: '{{ url('clients')  }}' +'/'+ id,

                            data: {_token: $("input[name=_token]").val()},
                            success: function (response) {
                                div_remove_from_dom.remove();
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },
                        });
                    });
/*DELETE CLIENT END***********************************************************/

/*ACTIVE FIELDS FOR EDIT CLIENT BEGIN***************************************************/
                    $(document).on('click', '.editNewClient',function () {
                        $(this).parent().children(".itemClient").attr('disabled', false);
                        $(this).parent().children(".saveAfterEditClient").attr('disabled', false);
                    });
/*ACTIVE FIELDS FOR EDIT CLIENT END***************************************************/

/*SAVE AFTER EDIT CLIENT BEGIN***************************************************/
                    $(document).on('click', '.saveAfterEditClient',function () {
                        var id = $(this).parent().find("input[name='first_name']").data('id') ;
                        var btn_edit = $(this).parent().children(".saveAfterEditClient");
                        var first_name = $(this).parent().find("input[name='first_name']");
                        var last_name = $(this).parent().find("input[name='last_name']");

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'PUT',
                            url: '{{ url('clients')  }}' +'/'+ id,
                            data: {_token: $("input[name=_token]").val(), first_name:first_name.val(), last_name:last_name.val()},
                            success: function (response) {
                                alert("изменено",response);
                                first_name.attr('disabled', true);
                                last_name.attr('disabled', true);
                                btn_edit.attr('disabled', true);
                            },
                            error: function(xhr){
                                var errors = xhr.responseJSON;
                                var error = errors;
                                if (error) {
                                    alert(error);
                                }
                            },


                        });
                    });

                });


            </script>

        </body>

    </html>
