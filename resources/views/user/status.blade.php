<x-user_layout>

    <body>
        <div class="container-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Case</th>
                        <th scope="col">Submission Status</th>
                        <th scope="col">Assessment Status</th>
                        <th scope="col">Documents</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scpope= col>Extrajudicial Settlement</th>
                        <td>{{14 - $ejsDocuments[0]['nullCount']}} Document/s Submitted</td> 
                    </tr>
                    <tr>
                        <th scpope= col>Simple Sale</th>
                        <td>{{13 - $ssDocuments[0]['nullCount']}} Document/s Submitted</td>
                    </tr>
                </tbody>
            </table>              
        </div>
    </body>
</x-user_layout>
