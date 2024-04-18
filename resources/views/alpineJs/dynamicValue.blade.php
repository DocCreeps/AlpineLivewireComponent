@extends('layouts.lBase')
@section('content')

    <div class="m-12 ">
        <div x-data="init()" x-init="init">
            <dl class="grid grid-cols-1 gap-4 md:grid-cols-4">
                <div class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg">
                    <dt class="order-last text-lg font-medium text-gray-500">
                        Membres
                    </dt>
                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="Math.round(members)"></dd>
                </div>

                <div class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg">
                    <dt class="order-last text-lg font-medium text-gray-500">
                        Jeux
                    </dt>

                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="Math.round(games)"></dd>
                </div>

                <div class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg">
                    <dt class="order-last text-lg font-medium text-gray-500">
                        Heures de jeu
                    </dt>

                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="Math.round(hours)"></dd>
                </div>

                <div class="flex flex-col px-4 py-8 text-center bg-blue-100 rounded-lg">
                    <dt class="order-last text-lg font-medium text-gray-500">
                        Années d'existence
                    </dt>
                    <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl" x-text="Math.round(years)"> </dd>
                </div>
            </dl>
        </div>
    </div>
    <div class="m-12 ">
            <dl class="grid grid-cols-1 gap-4 md:grid-cols-4">
    <x-stats :number="1234" :label="'Membres'" animated />
    <x-stats :number="56" :label="'Jeux'" animated />
    <x-stats :number="25863" :label="'Heures de jeu'" animated />
    <x-stats :number="12" :label="'Années d\'existence'" animated />
            </dl>
    </div>


@endsection
<script>
    function init() {
        let members = 1234;
        let games = 56;
        let years = 12;
        let hours = 25863;
        return {
            members,
            games,
            years,
            hours,
            targets: {
                members,
                games,
                hours,
                years,
            },
            current: 0,
            init: function () {
                Object.entries(this.targets).forEach(([key, target]) => {
                    this[key] = 0;
                    const interval = Math.max(2500 / (target - this[key]), 5);
                    const step = (target - this[key]) / (2500 / interval);
                    const handle = setInterval(() => {
                        if (this[key] < target)
                            this[key] += step;
                        else {
                            clearInterval(handle);
                            this[key] = target;
                        }
                    }, interval);
                });
            },
        };
    }
</script>
