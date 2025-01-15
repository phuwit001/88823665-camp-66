<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style>
    body {
        color: white;
        justify-content: center;
        align-items: center;
        text-shadow: 8px 8px 10px #0000008c;
        background-color: #ffaea5;
        background-image: url();
    }

    .list-group-item {
        width: 50%;
    }

    .list-group{
        align-items: center;
    }
</style>

<body class="container mt-4">
    <div class="text-center mb-3">
        <h1>สูตรคูณแม่ {{ $number; }}</h1>
    </div>

    <form method="post" action="{{ url('/myController') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">กรอกตัวเลขสูตรคูณที่ต้องการค้นหา</label>
            <input name="number" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>


    <div class="mt-4">
        <h2 class="text-center">Multiplication Table for {{ $number; }}</h2>
        <ul class="list-group">
                @foreach ($multiplicationTable as $row)
                    <li class="list-group-item">{{ $row }}</li>
                @endforeach
            </ul>
    </div>

</body>
