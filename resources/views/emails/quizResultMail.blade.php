<!DOCTYPE html>
<html lang="en-us" class="lang-en">
<table cellpadding="0" cellspacing="0" style="border-collapse: collapse; font: 13px Open Sans, sans-serif;"
       width="100%">
    <tbody>
    <tr>
        <td align="center" valign="top">
            <table cellpadding="0" cellspacing="0" style="border-collapse: collapse; font: 13px Open Sans, sans-serif;"
                   width="600">
                <tbody align="left">
                <tr align="left">
                    <td>
                        <table cellpadding="0" cellspacing="0"
                               style="border-collapse: collapse; font: 13px Open Sans, sans-serif;">
                            <tbody>
                            <tr style="height: 20px">
                                <td> <span style="font: 13px Open Sans, sans-serif; line-height: 20px">
                            This is an automatically generated assessment result of your test quiz. this email is generate from the test results and sent from the email server.</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        <table cellpadding="0" cellspacing="0"
                               style="border-collapse: collapse; font: 13px Open Sans, sans-serif;">
                            <tbody>
                            <tr style="height: 20px">
                                <td>Name&nbsp;</td>
                                <td>{{ $details['data']->user_name }}</td>
                            </tr>
                            <tr style="height: 20px">
                                <td>User Email&nbsp;</td>
                                <td><a href="mailto:{{ $details['data']->user_email }}" target="_blank"
                                       rel="noopener noreferrer">{{ $details['data']->user_email }}</a>
                                </td>
                            </tr>
                            {{--                            <tr style="height: 20px">--}}
                            {{--                                <td>Your Company&nbsp;--}}
                            {{--                                </td>--}}
                            {{--                                <td>Timezonedesign</td>--}}
                            {{--                            </tr>--}}
                            <tr style="height: 15px; font-size: 1px">
                                <td colspan="2">&nbsp;
                                </td>
                            </tr>
                            <tr style="height: 20px">
                                <td>Date/Time&nbsp;</td>
                                <td><b>{{ $details['exam_date_time'] }}</b></td>
                            </tr>
                            <tr style="height: 20px">
                                <td>Answered:&nbsp;</td>
                                <td><strong>{{ $details['data']->exam_answered }} /
                                        {{ $details['data']->exam_question_count }}</strong></td>
                            </tr>
                            <tr style="height: 20px">
                                <td>Your Score&nbsp;</td>
                                <td><strong>{{ $details['data']->exam_user_score }} / {{ $details['data']->exam_passing_score }}
                                        ({{ number_format(intval($details['data']->exam_user_score) / intval($details['data']->exam_passing_score), 2, '.', '') }}
                                        %)</strong></td>
                            </tr>
                            <tr style="height: 20px; display: table-row;">
                                <td>Passing Score&nbsp;
                                </td>
                                <td><strong>{{ $details['data']->exam_passing_score }}</strong></td>
                            </tr>
                            {{--                            <tr style="height: 20px">--}}
                            {{--                                <td>Time Spent:&nbsp;</td>--}}
                            {{--                                <td><strong>48--}}
                            {{--                                        sec</strong></td>--}}
                            {{--                            </tr>--}}
                            <tr style="height: 20px">
                                <td>Result&nbsp;</td>
                                <td><strong><b><span
                                                style="{{ $details['data']->result == 'Pass' ? 'color: #09a23f' : 'color: #e90b0b' }}"><b>{{ $details['data']->result }}</b></span></b></strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br>&nbsp;
                    </td>
                </tr>
                @foreach($details['data']->quizzes as $question)
                    @if ($question['question_result'] == 'Survey')
                        <tr align="left">
                            <td style="font: 13px Open Sans;padding-bottom:36px">
                  <span style="line-height: 12px"><b>Question
                      {{ intval($question['quizId']) + 1 }} <span style="color:#5B9BD5">Survey</span></b></span><br>
                                <span><b>{{ $question['question_content'] }}<br></b></span><br>
                                <table style="width:100%;border-collapse:collapse">
                                    <tbody>
                                    <tr style="background-color:#F3F3F3">
                                        <td colspan="2" style="border: 1px solid #E0E0E0;padding:5px">
                                            User Answer
                                        </td>
                                    </tr>
                                    @foreach ($question['question_user_answer'] as $item)
                                    <tr>
                                        <td style="border: 1px solid #E0E0E0;padding:5px">
                                            {{ $item }}
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <br>
                            </td>
                        </tr>
                    @else
                        <tr align="left">
                            <td style="font: 13px Open Sans;padding-bottom:36px">
                  <span style="line-height: 12px"><b>Question
                      {{ intval($question['quizId']) + 1 }} <span style="{{ $question['question_result'] == 'Correct' ? 'color:#70AD47' : 'color:#CD1212'}}">{{ $question['question_result'] }}</span></b></span><br>
                                <span
                                    style="line-height: 20px">Points:&nbsp;{{ $question['question_user_point'] }}/{{ $question['question_point'] }}&nbsp;&nbsp;|&nbsp;&nbsp;Attempts:&nbsp;{{ $question['question_user_attempts'] }}/{{ $question['question_attempts'] }}</span>
                                <br>{!! $question['question_content'] !!}<br>
                                <table style="width:100%;border-collapse:collapse">
                                    <tbody>
                                    <tr style="background-color:#F3F3F3">
                                        <td style="border: 1px solid #E0E0E0;padding:5px">
                                            User Answer
                                        </td>
                                        <td style="border: 1px solid #E0E0E0;padding:5px">
                                            Correct Answer
                                        </td>
                                    </tr>
                                    @for ($i = 0; $i < $question['question_user_answer'].length; $i++)

                                    <tr>
                                        <td style="border: 1px solid #E0E0E0;padding:5px">
                                            {{ $question['$question_user_answer'][i] }}
                                        </td>
                                        <td style="border: 1px solid #E0E0E0;padding:5px">
                                            {{ $question['$question_correct_answer'][i] }}
                                        </td>
                                    </tr>
                                    @endfor
                                    </tbody>
                                </table>
                                <br>
                                <span><b>Feedback:</b>{{ $question['question_feedback'] }}</span>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

</html>
