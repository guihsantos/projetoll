<label class="{{ $class ?? null}}">
    <span>{{$label ?? $input ?? "ERRO"}}</span>
    {!! Form::text($input,$value ?? null, $atributes) !!}
</label>    