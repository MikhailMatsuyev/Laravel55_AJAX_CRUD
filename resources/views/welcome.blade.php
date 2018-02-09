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
                        classes list000000000
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


            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>

                </tbody>
            </table>
            </div>
        </div>
        </div>

            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>


            <script type="text/javascript">

                $(document).ready(function() {

                    function getDateClases(obj_date_start, obj_date_end, repeat_on_field) {
                        var a=obj_date_start.clone();
                        var b=obj_date_end.clone();
                        var dif = b.diff(a, 'days');
                        var ar = [];
                        var obj_date_start_clone = obj_date_start.clone();
                        for(var i=0;i<=dif;i++) {
                            for (yy in repeat_on_field){
                                if(obj_date_start_clone.format('dddd')===(repeat_on_field[yy])) {
                                    var ob = {};
                                    ob['date'] = obj_date_start_clone.format('YYYY-MM-DD');
                                    //alert(ob['date']);
                                    ar.push(ob);
                                }
                                    obj_date_start_clone.add(1, 'days');
                            }
                        }
                        console.log("ar--",ar);
                    }

                    function setStartEndDateToMomentObject(clas_date) {
                        var arr_date   = clas_date.split('-');
                        //console.log('arr_date  --- ', arr_date);
                        //alert(100);
                        var year = Number(arr_date[0]);
                        var day = arr_date[2];
                        var month = Number(arr_date[1])-1 ;

                        obj_date = moment().set({'year':year, 'month':month, 'date':day});
                        return(obj_date);
                    }

                    $("#formAddClients").hide();

/**Add new client BEGIN*****************************************************************/
                    function parseDataFromForm () {
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


                        console.log('clas_end_date  --- ', clas_end_date);
                        getDateClases(obj_date_start, obj_date_end, repeat_on_field);

                        //var dif = obj_date_end.diff(obj_date_start, 'd');
                        //console.log('aaa   ', obj_date_start.add(10, 'days'));

                        //console.log('dif', dif);

                        //var dif = clas_end_date.diff(clas_start_date, 'd')

    /*
                        for(i=0;i<=dif;i++) {
                            var t=obj_date_start.clone();

                            for (yy in repeat_on_days){
                                if(t.add(i, 'days').format('dddd')===(repeat_on_days[yy])){
                                    alert();
                                }
                                    ;
                            }
                        }
                        */

                        //console.log('t ' , moment().add(5, 'days'));
                        //console.log('clas_end_date mom ', moment(clas_end_date));
                        //console.log('clas_end_date ', clas_end_date.add(10, 'days'));

                        //var mydate = "2017-06-28T00:00:00";
                        //var weekDayName =  moment(mydate).format('dddd');
                        //console.log(weekDayName);
                        //var dif = moment(clas_end_date)


                        /*var arr_date_end   = clas_end_date.split('-');
                        var arr_date_start = clas_start_date.split('-');

                        var year_start = arr_date_start[0];
                        var day_start = arr_date_start[2];
                        var month_start = arr_date_start[1];

                        var year_end = arr_date_end[0];
                        var day_end = arr_date_end[2];
                        var month_end = arr_date_end[1];

                        //console.log('arr_date_end   ', Number (month_end));

                        arr_date_end = moment().set({'year':year_end, 'month':month_end, 'date':day_end});
                        arr_date_start = moment().set({'year':year_start, 'month':month_start, 'date':day_start});
                        */

                        //console.log('arr_date_end   ', arr_date_end);
                        //console.log('arr_date_start   ', arr_date_start);



                        //m2.diff(m, 'd')


                        //var a = new Date('02/09/15');
                        //var b = a.add(1, 'week');
                        //var t=moment();


                        //a++;
                        /*for(i=0;i<=10;i++) {
                            var t=moment();
                            console.log('aaa   ', t.add(i, 'days'));
                        }
                        //console.log('aaa   ',new Date(15, 02, 1));




                        /*
                        var clas_name = form.find("input[name='clas-name']").val();
                        var clas_start_date = $("#formAddReccuringClases").find("input[name='clas-start-date']").val();
                        var clas_end_date = $("#formAddReccuringClases").find("input[name='clas-end-date']").val();
                        var arr_date = clas_end_date.split('-');
                        var year = arr_date[0];
                        var day = arr_date[2];
                        var month = arr_date[1];

                        console.log("clas_end_date",day);


                        var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

                        var a = new Date('02/09/'+ arr_date[0]);
                        alert(a);
                        alert(a.getDay());
                        alert(weekday[a.getDay()]);


                        console.log("clas_end_date",clas_end_date);


                        console.log("99",$('#formAddReccuringClases').find("select[name='clas-name']").val());
                      */
                    }




                    $('#addNewRecClass').click(function (e) {


                        parseDataFromForm();



                        //console.log("99",form.serialize());

                        /*
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var first_name = $("#formAddClients").find("input[name='first_name']").val();
                        var last_name = $("#formAddClients").find("input[name='last_name']").val();

                        $.ajax({
                            url: '{{ url('clients')  }}',
                            type: 'POST',

                            data: {_token: $("input[name=_token]").val(), first_name:first_name, last_name:last_name},
                            success: function (response) {
                                alert("добавлено");
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
                        */
                    });
/**Add new client END*****************************************************************/


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
          /*              });*/

                        });
                    });

                });


            </script>

        </body>

    </html>
<!--
<script>
        $("document").ready(function(){

            $('.bbb').click(function() {
                val=($(this).val());
                parent=$(this).parent().parent().parent();

                confirm_var=confirm('Удалить песню с помощью AJAX?');//запрашиваем подтверждение на удаление
                if (!confirm_var) return false;
                $.ajax({
                    url:'{{ url('songs')  }}'+'/'+val,
                    type: 'DELETE',
                    data:{_token: $("input[name=_token]").val()},
                    success: function(response) {
                        parent.remove();
                        alert ("Песня удалена");
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON;
                        var error = errors;
                        if (error) {
                            alert(error);
                        }
                    }
                })
            })
        })
    </script>