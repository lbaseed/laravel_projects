<style>
    .head {
        text-align: center;
        font-size: 12px;
        font-weight: bold;
    }
    
    </style>
    
    <div>
    
        <div class="head" style="margin-bottom: 15px">
            <div style="font-size: 16px;">NATIONAL JUDICIAL COUNCIL</div>
            <div>MONITORING COMMITTEE ON THE PERFORMANCE OF JUDICIAL OFFICERS</div>
            <div>OF SUPERIOR COURTS OF RECORD</div>
            <div>QUARTERLY RETURN OF CASES FOR THE QUARTER ENDED: MARCH 2021</div>
        </div>
        <table style="width: 100%; font-size: 10px; font-weight: bold; margin-bottom: 15px;">
            <tr>
                <td style="text-align: left;">DIVISIONS: BAUCHI, GOMBE & YOLA</td>
                <td style="text-align: right;"> COURT: NATIONAL INDUSTRIAL COURT OF NIGERIA </td>
            </tr>
        </table>
    
        <table cellspacing='0'>
    
            <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Subject Matter</th>
                    <th>Filing Date</th>
                    <th>Assignment Date</th>
                    <th>Commencement Date</th>
                </tr>
            </thead>
            <tbody>
               
                    @foreach ($items as $item)
                        <tr>
                            <td style="border: 0.5px solid;">{{ $item->case_id }}</td>
                            <td style="border: 0.5px solid;">{{ $item->case_subject }}</td>
                            <td style="border: 0.5px solid;">{{ $item->filing_date }}</td>
                            <td style="border: 0.5px solid;">{{ $item->assignment_date }}</td>
                            <td style="border: 0.5px solid;">{{ $item->hearing_date }}</td>
    
                        </tr>
                    @endforeach
                
            </tbody>
        </table>
    </div>