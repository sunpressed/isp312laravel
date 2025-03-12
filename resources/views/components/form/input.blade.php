@props([
    "type" => "text",
    "name",
    "label",
    "placeholder",
    "error"=>"false"
])
<div class="mb-3">
    <label class="form-label" for="fio">Ваше Фио</label>
    <input type="text" name="fio" id="fio" placeholder="ФИО" class="form-control">
    <div class="invalid-feedback"></div>
</div>
