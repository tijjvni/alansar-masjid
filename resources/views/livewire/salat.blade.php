<div class="flex flex-col md:flex-row">
	<div class="py-5 px-10 w-full bg-gradient-to-b from-blue-300 to-green-300 md:bg-gradient-to-r">
		<div class="w-full bg-trasnparent shadow-outline py-5 px-10 " >
			<p class="text-blue-400 text-2xl md:text-3xl">Next Salah</p>
			<p class="text-blue-800 text-4xl md:text-6xl">{{ $salat->salat }}	</p>
			<p class="text-blue-600 text-5xl">{{ date('h:ia',strtotime($salat->iqama))  }} </p>
			<hr class="my-1 bg-blue-500" />
			<p class="text-blue-400 text-2xl">Next Juma'a</p>
			<p class="text-blue-500 text-3xl">
				<span id="days"></span>Day(s)
				<span id="hours"></span>Hrs
				<span id="minutes"></span>Mins
				<span id="seconds"></span>
			</p>

		</div>
	</div>
	<div class="py-0 px-10 w-full bg-green-300">

		@livewire('salat-time-table')

	</div>
	
</div>

<script type="text/javascript">
	
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let birthday = "<?php echo date('M d, Y h:i:s',strtotime("Next friday")); ?>",
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached


        //seconds
      }, 0)
  }());	

</script>