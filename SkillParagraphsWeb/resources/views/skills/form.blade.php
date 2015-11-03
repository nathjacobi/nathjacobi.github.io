@extends('master')

@section('content')
    @foreach($mainSkills as $mainSkill)


    <table border="">{{ $mainSkill->title }}
        <p>
            <tr align="CENTER">
                <td width="200"></td>
                @foreach($levels as $level)
                    <td width="75">{{ $level->levelName }}
                    </td>
                    @endforeach
            </tr>
    @foreach($skills[$mainSkill->id] as $skill)

                <tr align="CENTER">
                    <td width="200">{{ $skill->skill }}</td>
                    <td width="75">
                        <input type="radio" value="1" name="{{ $skill->skill }}" checked>
                    </td>
                    <td width="75">
                        <input type="radio" value="2" name="{{ $skill->skill }}">
                    </td>
                    <td width="75">
                        <input type="radio" value="3" name="{{ $skill->skill }}">
                    </td>
                    <td width="75">
                        <input type="radio" value="4" name="{{ $skill->skill }}">
                    </td>
                    <td width="75">
                        <input type="radio" value="5" name="{{ $skill->skill }}">
                    </td>
                </tr>
        @endforeach
                </p>
            </table>
        <br>
    @endforeach
    <p>Lookie here, I am where I need to be</p>
@stop