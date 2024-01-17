<style>
    .section-info {
        background-color: #E9F3FF;
        padding: 20px;
        margin-top: 40px;
        /* margin-bottom: 20px; */
        padding-left: 30px;
        padding-right: 30px;
    }

    .my-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;

        text-align: center;
        /* Centra el texto en el contenedor principal */
    }

    .my-column {
        flex: 1;
        margin: 0 10px;
        margin-top: 20px;
        /* Añadido margen superior para separar del título */
        padding: 20px;
        border-radius: 8px;
        box-sizing: border-box;
    }

    .my-column h2 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .my-column p {
        color: #555;
    }

    @media (max-width: 767px) {
        .my-column {
            flex: 100%;
            margin-top: 0;
            /* Asegura que el margen superior se elimine en pantallas más pequeñas */
        }
    }
</style>

<div class="section-info">

    <div class="text-center">
        <h2>{{ $title }}</h2>
        <p class="mt-4">{{ $subtitle }}</p>
    </div>

    <div class="my-container">


        <div class="my-column">
            <h2>{{ $title_column1 }}</h2>
            <p>{!! $description_column1 !!}</p>
        </div>

        <div class="my-column">
            <h2>{{ $title_column2 }}</h2>
            <p>{!! $description_column2 !!}</p>
        </div>

        <div class="my-column">
            <h2>{{ $title_column3 }}</h2>
            <p>{!! $description_column3 !!}</p>
        </div>
    </div>


</div>
