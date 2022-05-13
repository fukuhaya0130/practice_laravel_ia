<h1>あなたの所属会社</h1>
@foreach($companies as $company)
<input type="checkbox" name="lecture[]" value={{$company->name}} {{$company->select == true ? "checked" : ""}}>
<label for="lecture[]">{{ $company->name }}</label>
@endforeach