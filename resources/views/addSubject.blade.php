<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subjects</title>
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
            <h1>Subjects</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                <form action="{{ url('store_subjects') }}" method="POST" class="form-horizontal">
                    @csrf

                    <input type="hidden" name="totalSubjects" id="totalSubjects" value="{{$weekdays->total_subjects}}">
                    <input type="hidden" name="totalHours" id="totalHours" value="{{$weekdays->total_hours_of_week}}">
                    <input type="hidden" name="weekdayid" id="weekdayid" value="{{$weekdays->id}}">
                    @for ($i = 1; $i <= $weekdays->total_subjects; $i++)
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <label for="subject" class="col-sm-3 control-label">Subjects{{$i}}</label>
                                    <input type="text" required name="subject[]" id="subject{{$i}}" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label for="hours" class="col-sm-3 control-label">Hours{{$i}}</label>
                                    <input type="text" required name="hours[]" onchange="checkWorkingHours()" id="hours{{$i}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    @endfor
                    <div class="form-group">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary" id="submit_button">
                                <i class="fa fa-plus"></i> Add
                            </button>
                            <a href="{{route('working-hours')}}" class="btn btn-primary">
                                Cancel
                            </a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    function checkWorkingHours() {
        var total=0;
        for(var i=1;i<=$('#totalSubjects').val();i++){
            total = total + parseInt($('#hours'+i).val());
            if(total > $('#totalHours').val()){
                alert('Please Enetr Valid Hours');
                $('#hours'+i).val('');
            }
        }

    }
</script>
</html>
