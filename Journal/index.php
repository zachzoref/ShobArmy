<?php include '../header.php'?>
<div style="width: 90%" class="container-fluid">
    <header>
        <h1>Events Journal</h1>
        <p>We constantly learn from mistakes, the past, and experience. In here, We document every single thing our brave team has to go through.</p>
    </header>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark centerize" data-toggle="modal" data-target="#addEvent">
        Add Event
    </button>
    <br>
    <div class="row centerize">
        <button id="nightFilter" type="button" class="btn btn-danger">Night Filter</button>
        <button id="resetFilter" type="button" class="btn btn-danger">Reset Filter</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Event to the  Journal</legend>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="addType">Type</label>
                                <div class="col-md-6">
                                    <select id="addType" name="addType" class="form-control">
                                        <option value="Fault">Fault</option>
                                        <option value="Activity">Activity</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="addSystem">System</label>
                                <div class="col-md-6">
                                    <select id="addSystem" name="addSystem" class="form-control">
                                        <option value="Maala">Maala</option>
                                        <option value="Portal">Portal</option>
                                        <option value="Nifgaim">Nifgaim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="startDate">Start Date</label>
                                <div class="col-md-6 input-group date startDate" id="startDate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#startDate"/>
                                    <div class="input-group-append" data-target="#startDate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="addDetails">Details</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" id="addDetails" name="addDetails"></textarea>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="addStatus">Status</label>
                                <div class="col-md-6">
                                    <select id="addStatus" name="addStatus" class="form-control">
                                        <option value="Open">Open</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="endDate">End Date</label>
                                <div class="col-md-6 input-group date endDate" id="endDate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#endDate"/>
                                    <div class="input-group-append" data-target="#endDate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Edit Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Edit an Event in the  Journal</legend>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editType">Type</label>
                                <div class="col-md-6">
                                    <select id="editType" name="editType" class="form-control">
                                        <option value="Fault">Fault</option>
                                        <option value="Activity">Activity</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editSystem">System</label>
                                <div class="col-md-6">
                                    <select id="editSystem" name="editSystem" class="form-control">
                                        <option value="Maala">Maala</option>
                                        <option value="Portal">Portal</option>
                                        <option value="Nifgaim">Nifgaim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="startDate">Start Date</label>
                                <div class="col-md-6 input-group date startDate" id="editStartDate" data-target-input="nearest">
                                    <input id="editStartDate" type="text" class="form-control datetimepicker-input" data-target="#editStartDate"/>
                                    <div class="input-group-append" data-target="#editStartDate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editDetails">Details</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" id="editDetails" name="editDetails" value=""></textarea>
                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editStatus">Status</label>
                                <div class="col-md-6">
                                    <select id="editStatus" name="editStatus" class="form-control">
                                        <option value="Open">Open</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="editEndDate">End Date</label>
                                <div class="col-md-6 input-group date endDate" id="editEndDate" data-target-input="nearest">
                                    <input id="editEndDate" type="text" class="form-control datetimepicker-input" data-target="#editEndDate"/>
                                    <div class="input-group-append" data-target="#editEndDate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <table id="journalTable" class="table table-hover shobTable">
        <thead id="journalTableThead">
            <th style="width: 5%">ID <i class="fas fa-sort"></i></th>
            <th>Type <i class="fas fa-sort"></i></th>
            <th>System <i class="fas fa-sort"></i></th>
            <th>S.Date <i class="fas fa-sort"></i></th>
            <th style="width: 40%">Event <i class="fas fa-sort"></i></th>
            <th>Status <i class="fas fa-sort"></i></th>
            <th>E.Date <i class="fas fa-sort"></i></th>
            <th>Clickable <i class="fas fa-sort"></i></th>
        </thead>
        <tr>
            <td id="e1-id">1</td>
            <td id="e1-type">Fault</td>
            <td id="e1-system">Maala</td>
            <td id="e1-startDate">29/08/1992 14:00</td>
            <td id="e1-details">some shit and then some other shit. <br>
                then they fucked with us. <br>
                fucking shittttt <br>
            </td>
            <td id="e1-status">Completed</td>
            <td id="e1-endDate">22/04/2014 00:19</td>
            <td><button id="e1-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td id="e2-id">2</td>
            <td id="e2-type">Activity</td>
            <td id="e2-system">Portal</td>
            <td id="e2-startDate">29/09/2001 23:43</td>
            <td id="e2-details"> Team DC Wanted to fix some stuff <br> so they put the shit <br> in the other shit
            </td>
            <td id="e2-status">Open</td>
            <td id="e2-endDate">22/04/2017 05:06</td>
            <td><button id="e2-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td id="e3-id">3</td>
            <td id="e3-type">Fault</td>
            <td id="e3-system">Nifgaim</td>
            <td id="e3-startDate">15/04/2019 14:32</td>
            <td id="e3-details">a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td id="e3-status">Completed</td>
            <td id="e3-endDate">22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Fault</td>
            <td>Nifgaim</td>
            <td>15/04/2019 14:32</td>
            <td>a few soldiers died <br> and then the weblogic died <br>
            </td>
            <td>Completed</td>
            <td>22/04/2019 18:59</td>
            <td><button id="e3-" type="button" class="btn btn-danger editEventButton" data-toggle="modal" data-target="#editEvent">Edit</button></td>
        </tr>
    </table>
</div>
