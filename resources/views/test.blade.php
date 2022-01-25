{{--  import data  --}}
<form action="{{url('import-csv')}}" method = "POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" accept = ".xlsx"><br>
    <input type="submit" value="Import file Excel" name="import_csv" class="btn btn-warning">
</form>
{{--  export data  --}}
<form action="{{url('export-csv')}}" method="POST">
    @csrf
    <input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success">
</form>
