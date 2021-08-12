<x-layout>
    <x-slot name="title">
        Company Show Page - Company Module List
    </x-slot>

    <div class="companies-head">
        <div class="companies-head-left">
            <h2>Companies</h2>
        </div>

        <div class="companies-head-right">
            <i class="fas fa-igloo"></i>
            <span>Home</span>
            <i class="fas fa-angle-right"></i>
            <span>Companies</span>
            <i class="fas fa-angle-right"></i>
            <span>Company List</span>
        </div>
    </div>

    <div class="companies-contents">
        <div class="companies-contents-head">
            <h3>Company Detail Page</h3>
            <a href="{{ route('posts.edit', $post) }}">Back</a>
         </div>

        {{-- <div id="show-table"></div> --}}

         <table class="company-detail-table">
            <tr>
                <th>ID</th>
                <td>{{ $post->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $post->name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $post->email }}</td>
            </tr>
            <tr>
                <th>Postcode</th>
                <td>{{ $post->postcode }}</td>
            </tr>
            <tr>
                <th>Prefecture</th>
                <td>{{ $post->prefName }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ $post->city }}</td>
            </tr>
            <tr>
                <th>Local</th>
                <td>{{ $post->local }}</td>
            </tr>
            <tr>
                <th>Street address</th>
                <td>{{ $post->street_address }}</td>
            </tr>
            <tr>
                <th>Business hour</th>
                <td>{{ $post->business_hour }}</td>
            </tr>
            <tr>
                <th>Regular holiday</th>
                <td>{{ $post->regular_holiday }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $post->phone }}</td>
            </tr>
            <tr>
                <th>Fax</th>
                <td>{{ $post->fax }}</td>
            </tr>
            <tr>
                <th>URL</th>
                <td>{{ $post->url }}</td>
            </tr>
            <tr>
                <th>License number</th>
                <td>{{ $post->license_number }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src="{{ asset('storage/uploads/file/image_'.$post->id.'.png') }}" width="150" height="100"></td>
            </tr>
            <tr>
                <th>Apdated_At</th>
                <td>{{ $post->updated_at }}</td>
            </tr>
          </table>
    </div>

    {{-- <script type="text/javascript">
        $(function(){
            var sampleData = [
            {id:"{{ $post->id }}", name:"{{ $post->name }}", email:"{{ $post->email }}",
             postcode:"{{ $post->postcode }}", prefecture:"{{ $post->prefecture }}",
             address:"{{ $post->city }}{{ $post->local }}{{ $post->street_address }}",
             updated_at:"{{ $post->updated_at }}"}
            ];

            var table = new Tabulator("#show-table", {
            data:sampleData,
            layout:"fitColumns",
            responsiveLayou0t:"hide",
            tooltips:true,
            addRowPos:"top",
            history:true,
            pagination:"local",
            paginationSize:7,
            movableColumns:true,
            resizableRows:true,
            initialSort:[
                {column:"name", dir:"asc"},
            ],

            columns:[
                {title:"ID", field:"id", width:50},
                {title:"Name", field:"name", width:120},
                {title:"Email", field:"email", width:110},
                {title:"Postcode", field:"postcode", width:120},
                {title:"Prefecture", field:"prefecture", width:120},
                {title:"Address", field:"address", width:160},
                {title:"Updated At", field:"updated_at", sorter:"date", width:130},
                {title:"Action", field:"action"},
            ],
            });
        });
    </script> --}}
</x-layout>
