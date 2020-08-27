@extends('layouts.app')

@section('css')

{{--    <link href="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" rel="stylesheet">--}}
{{--    <link href="https://cdn.datatables.net/buttons/1.6.3/css/buttons.bootstrap4.min.css" rel="stylesheet">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-html5-1.6.3/datatables.min.css"/>--}}


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-html5-1.6.3/datatables.min.css"/>


    @endsection
@section('js')

{{--    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/buttons/1.6.3/js/dataTables.buttons.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/buttons/1.6.3/js/buttons.bootstrap4.min.js"></script>--}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-html5-1.6.3/datatables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#deviceInfoHistories').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>

    @endsection


@section('content')
<div class="container-fluid">
    <table id="deviceInfoHistories" class="table table-responsive">
        <thead class="thead-light">
        <tr>
            <th scope="row">#ID</th>
            <th>ComputerName</th>
            <th>DeviceVersion</th>
            <th>DateLogged</th>
            <th>Hospital</th>
            <th>Department</th>
            <th>ComputerMac</th>
            <th>ComputerIP</th>
            <th>Comments</th>
            <th>BatCurrent</th>
            <th>BatVolte</th>
            <th>LvdVolte</th>
            <th>ChInVolte</th>
            <th>BatTemp</th>
            <th>BoardTemp</th>
            <th>TimeToOff</th>
            <th>Status_Sleep</th>
            <th>Status_ChTermCurrent</th>
            <th>Status_ChTermCap</th>
            <th>Status_RunAway</th>
            <th>Status_ChProhibited</th>
            <th>Status_OpProhibited</th>
            <th>Status_BatVoltLow</th>
            <th>Status_BatCapLow</th>
            <th>Status_Ctrl5Volt</th>
            <th>Status_CtrlCh</th>
            <th>Status_LvdOn</th>
            <th>Status_NoBat</th>
            <th>Status_MaxBatVolte</th>
            <th>Status_LowCurrent</th>
            <th>DeviceVersion</th>
            <th>BatCapPcnt</th>
            <th>BatCapacity</th>
            <th>BatType</th>
            <th>NumberOfCells</th>
            <th>ChEffeciency</th>
            <th>OffTime</th>
            <th>MaxVolte</th>
            <th>MinVolte</th>
            <th>RechargeVolte</th>
            <th>CutOffCurrent</th>
            <th>ChargeCurrent</th>
            <th>PsCurrent</th>
            <th>Capacitance</th>
            <th>VPWM</th>
            <th>FloatVolte</th>
            <th>StorageToRecharge</th>
            <th>MaxStorageTime</th>
        </tr>
        </thead>
        <tbody>
        @foreach($devicesInfoHistoryArray as $history)
            <tr>
                <td scope="row">{{$history->ID}}</td>
                <th>{{$history->ComputerName}}</th>
                <td>{{$history->DeviceVersion}}</td>
                <td>{{$history->DateLogged}}</td>
                <td>{{$history->Hospital}}</td>
                <td>{{$history->Department}}</td>
                <td>{{$history->ComputerMac}}</td>
                <td>{{$history->ComputerIP}}</td>
                <td>{{$history->Comments}}</td>


                <td>{{$history->BatCurrent}}</td>
                <td>{{$history->BatVolte}}</td>
                <td>{{$history->LvdVolte}}</td>
                <td>{{$history->ChInVolte}}</td>
                <td>{{$history->BatTemp}}</td>

                <td>{{$history->BoardTemp}}</td>
                <td>{{$history->TimeToOff}}</td>
                <td>{{$history->Status_Sleep}}</td>
                <td>{{$history->Status_ChTermCurrent}}</td>
                <td>{{$history->Status_ChTermCap}}</td>
                <td>{{$history->Status_RunAway}}</td>

                <td>{{$history->Status_ChProhibited}}</td>
                <td>{{$history->Status_OpProhibited}}</td>
                <td>{{$history->Status_BatVoltLow}}</td>
                <td>{{$history->Status_BatCapLow}}</td>
                <td>{{$history->Status_Ctrl5Volt}}</td>

                <td>{{$history->Status_CtrlCh}}</td>
                <td>{{$history->Status_LvdOn}}</td>
                <td>{{$history->Status_NoBat}}</td>
                <td>{{$history->Status_MaxBatVolte}}</td>
                <td>{{$history->Status_LowCurrent}}</td>

                <td>{{$history->DeviceVersion}}</td>

                <td>{{$history->BatCapPcnt}}</td>
                <td>{{$history->BatCapacity}}</td>
                <td>{{$history->BatType}}</td>
                <td>{{$history->NumberOfCells}}</td>
                <td>{{$history->ChEffeciency}}</td>
                <td>{{$history->OffTime}}</td>
                <td>{{$history->MaxVolte}}</td>
                <td>{{$history->MinVolte}}</td>
                <td>{{$history->RechargeVolte}}</td>
                <td>{{$history->CutOffCurrent}}</td>
                <td>{{$history->ChargeCurrent}}</td>
                <td>{{$history->PsCurrent}}</td>
                <td>{{$history->Capacitance}}</td>
                <td>{{$history->VPWM}}</td>
                <td>{{$history->FloatVolte}}</td>
                <td>{{$history->StorageToRecharge}}</td>
                <td>{{$history->MaxStorageTime}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection
