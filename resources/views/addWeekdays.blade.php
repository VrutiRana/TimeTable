<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week Days</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS And JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Add WorkDays</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                <form action="{{ url('store_workdays') }}" method="POST" class="form-horizontal">
                    @csrf

                    <div class="form-group">
                        <label for="working_days" class="col-sm-3 control-label">Number of Wroking Days</label>
                        <div class="col-sm-6">
                            <input type="text" name="working_days" onchange="getWorkingHours()" id="working_days" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            @if($errors->has('working_days'))
                                <div class="error" style="color: red">{{ $errors->first('working_days') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subjects_per_days" class="col-sm-3 control-label">Number of subjects per days</label>
                        <div class="col-sm-6">
                            <input type="text" name="subjects_per_days" onchange="getWorkingHours()" id="subjects_per_days" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            @if($errors->has('subjects_per_days'))
                                <div class="error" style="color: red">{{ $errors->first('subjects_per_days') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="total_subjects" class="col-sm-3 control-label">Total subjects</label>
                        <div class="col-sm-6">
                            <input type="text" name="total_subjects" id="total_subjects" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            @if($errors->has('total_subjects'))
                                <div class="error" style="color: red">{{ $errors->first('total_subjects') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="total_hours_week" class="col-sm-3 control-label">Total Hours of week</label>
                        <div class="col-sm-6">
                            <input type="text" readonly name="total_hours_week" id="total_hours_week" class="form-control">
                        </div>
                        @if($errors->has('total_hours_week'))
                            <div class="error" style="color: red">{{ $errors->first('total_hours_week') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary" id="submit_button">
                                <i class="fa fa-plus"></i> Add
                            </button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    function getWorkingHours(){
            var working_days = $('#working_days').val();
            var subjects_per_days = $('#subjects_per_days').val();
            if(subjects_per_days != '' && working_days !='') {
                var total_hours_week = working_days * subjects_per_days;
                $('#total_hours_week').val(total_hours_week);
            }else{
                $('#total_hours_week').val();
            }

    }
</script>
</html>
