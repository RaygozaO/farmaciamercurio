
<script src='../../js/index.global.js'></script>
<main class="full-box main-container">
    <section class="full-box page-content">
        <nav class="full-box navbar-info">
            <a href="#" class="float-left show-nav-lateral">
                <i class="fas fa-exchange-alt"></i>
            </a>
            <a href="../../index.php">
                <i class="fas fa-user-cog"></i>
            </a>
            <a href="#" class="btn-exit-system">
                <i class="fas fa-power-off"></i>
            </a>
        </nav>
        <script>

            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: { center: 'dayGridMonth,timeGridWeek' },
                    views: {
                        dayGridMonth: { // name of view
                            titleFormat: { year: 'numeric', month: '2-digit', day: '2-digit' }
                            // other view-specific options here
                        }
                    },
                    initialView: 'timeGridWeek',
                    locale: 'es',
                    events: '../CitasModel.php'
                });
                calendar.render();
            });

        </script>
        <h1 class="text-center">Agendar una cita Dra. Mytzy</h1>
        <div class="container" id='calendar'></div>
    </section>
</main>
