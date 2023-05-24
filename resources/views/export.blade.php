<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1rem;
        }

        th, td {
            border: 1px solid black;
            padding: 0.5rem;
            text-align: left;
        }

        th {
            background-color: #ddd;
        }

        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .text {
            font-size: 14px;
            margin-bottom: 0.5rem;
        }

        .page-number {
            text-align: center;
            font-size: 12px;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
<div>
    <div class="center">
        <p>Planeación area integrada: {{$areaPlan->area->name}}</p>
    </div>

    <!-- Título -->
    <h1 class="title">{{$areaPlan->name}} semana: {{$areaPlan->week}}</h1>

    <!-- Subtítulo -->
    <h2 class="subtitle"> Creado por: {{$areaPlan->user->name}}</h2>

    <h2>Pregunta problematizadora</h2>
    <!-- Texto normal -->
    <p class="text">{{$areaPlan->question}}</p>

    <h2>Competencias</h2>

    @foreach($areaPlan->planCompetences()->with('competence', 'competence.subject')->get() as $competence)
        <p class="text"> * {{$competence->competence->description}}</p>
        <span>
    @endforeach

    <h2>Temas</h2>

    @foreach($areaPlan->planTopics()->with('topic', 'topic.subject')->get() as $topic)
        <p class="text"> * {{$topic->topic->name}}</p>
        <span>
    @endforeach

    <h2>Indicadores de desempeño</h2>

    @foreach($areaPlan->planIndicators()->with('indicator', 'indicator.subject')->get() as $indicator)
                <h3 class="text">{{$indicator->indicator->type}}</h3>
                <p class="text">{{$indicator->indicator->description}}</p>
                <span>
    @endforeach

    <h2>Agenda creativa</h2>

    @foreach($areaPlan->planCreativeAgenda()->with('activities')->get() as $agenda)
                        @foreach($agenda->activities as $activity)
                            <p class="text">{{$activity->title}} : {{$activity->description}}</p>
                            <span>
        @endforeach
                                @endforeach

    <h2>Actividades</h2>

    @foreach($areaPlan->planActivities as $activity)
                                    <h3 class="text">{{$activity->title}}</h3>
                                    <p class="text">{{$activity->description}}</p>
                                    <span>
    @endforeach

    <h2>Orientaciones</h2>

    @foreach(json_decode($areaPlan->orientations) as $orientation)
                                            <p class="text">{{$orientation}}</p>
                                            <span>
    @endforeach

    <h2>Adaptaciones para el docente</h2>

    @foreach(json_decode($areaPlan->adaptations) as $adaptation)
                                                    <p class="text">{{$adaptation}}</p>
                                                    <span>
    @endforeach

    <h2>Referencencias</h2>

    @foreach(json_decode($areaPlan->planReferences) as $reference)
                    <p class="text">* {{$reference->title}} : {{$reference->value}} - {{$reference->author}}</p>
                    <span>
    @endforeach

    <h2>Tareas</h2>

    @foreach(json_decode($areaPlan->planTasks) as $task)
                            <h3 class="text">{{$task->title}}</h3>
                            <p class="text">{{$task->description}}</p>
                            <span>
    @endforeach
</div>
</body>

</html>




