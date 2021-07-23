<x-app-layout>
    <x-slot name="header">
        Quizler
    </x-slot>

    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('quizzes.create') }}" class="btn btn-sm btn-primary">
                <i class="fa fa-plus"></i>
                Quiz Olustur</a>
        </h5>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Quiz</th>
                    <th scope="col">Status</th>
                    <th scope="col">Finish Date</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($quizzes as $quiz)
                <tr>
                    <td scope="row">{{ $quiz->title }}</td>
                    <td>{{ $quiz->status }}</td>
                    <td>{{ $quiz->finish_date }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        {{$quizzes->links()}}
    </div>
</x-app-layout>