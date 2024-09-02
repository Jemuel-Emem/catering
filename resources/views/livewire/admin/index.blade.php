<div class="p-4">


    <div class="flex flex-col md:flex-row gap-6 mb-6">


        <div class="flex-1 bg-green-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-green-700 mb-4">Approved</h2>
            <p class="text-gray-700">

                List of approved items goes here.
            </p>
        </div>


        <div class="flex-1 bg-yellow-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-yellow-700 mb-4">Pending</h2>
            <p class="text-gray-700">

                List of pending items goes here.
            </p>
        </div>


        <div class="flex-1 bg-blue-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-blue-700 mb-4">Finished</h2>
            <p class="text-gray-700">

                List of finished items goes here.
            </p>
        </div>

    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Monthly Sales Report</h2>
            <div id="monthlySalesChart">

                <canvas id="salesChart"></canvas>
            </div>
        </div>


        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Monthly Reservation Result</h2>
            <div id="monthlyReservationResult">

                <canvas id="reservationChart"></canvas>
            </div>
        </div>

    </div>

</div>
