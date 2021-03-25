@extends('layouts.app')
@section('content')
    <div>
        <button onclick="printDiv('printThis')" class="btn btn-success">Print Report</button>
    </div>
    <br>
    <div id="printThis" class="card" style="padding: 10px">
        PRIVATE & CONFIDENTIAL <br>

        {{ $date }} <br> <br>

        Dear {{ $name }}, <br> <br>

        Your name has been referred as a possible cause for concern by your module co-ordinator because you are recorded as:
        <br> <br>
        {{ $reason }} <br> <br>

        It is essential that you see me as soon as possible. You must do this by {{ $date }}. The meeting will
        provide an opportunity to check and review your progress and find a means of resolving any difficulties you may be
        experiencing. You are reminded that all students enrolling on a course at UCN are expected to meet the academic
        requirements of their programme. The Student Code details the implications of 'failure to meet academic,
        professional or vocational requirements' and whilst there may be mitigating circumstances not known to us at this
        time, you should regard this letter as an informal warning that your continuation on the course may be at risk.
        Failure to make contact may result in us deeming you to be withdrawn from your course. <br>

        If for any reason you are experiencing difficulties which impact on your academic work, you should contact your
        personal tutor for advice. You must however see me as instructed by the {{ $date }}. <br> <br>

        Yours sincerely,
        <br>
        Student Service

    </div>
@endsection
