<div
    x-data="{ chart: null }"
    x-init="chart = new Chartisan({
            el: '#logins-chart',
            url: '@chart('logins_chart')',
            hooks: new ChartisanHooks()
            .colors()
            .datasets(['line'])
            .tooltip(),
            });"
    class="bg-white shadow overflow-hidden sm:rounded-lg mt-4">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
            <div class="ml-4 mt-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Logins Last 3 Hours
                </h3>
            </div>
            <div class="ml-4 mt-4 flex-shrink-0">
                <span class="inline-flex rounded-md shadow-sm">
                    <button @click.prevent="chart.update({ background: true })" type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                        <svg class="h-6 w-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div style="height: 325px">
        <div id="logins-chart" style="height: 300px"></div>
    </div>
</div>

@push('scripts')
<!-- Charting library -->
<script src="https://unpkg.com/echarts/dist/echarts.min.js" ></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js" ></script>
@endpush
