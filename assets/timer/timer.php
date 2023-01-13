<style media="screen">
  body
  {
    font: normal 13px/20px Arial,Helvetica,sans-serif;
    word-wrap: break-word;
    background: #fff;
    padding-top: 10px;
  }
  .countdown-label
  {
    font: thin 15px Arial, sans-serif;
    color: #65584c;
    text-align: center;
    text-transform: uppercase;
    display: inline-block;
    letter-spacing: 2px;
    margin-top: 9px;
  }
  #countdown
  {
    box-shadow: 0 1px 2px 0 rgba(1,1,1,0.4);
    width: 240px;
    height: 96px;
    text-align: center;
    background: #f1f1f1;
    border-radius: 5px;
    margin: auto;
  }
  #countdown #tiles
  {
    color: #fff;
    position: relative;
    z-index: 1;
    text-shadow: 1px 1px 0px #ccc;
    display: inline-block;
    font-family: Arial, sans-serif;
    text-align: center;
    padding: 20px;
    border-radius: 5px 5px 0 0;
    font-size: 48px;
    font-weight: thin;
    display: block;
  }
  .color-full
  {
    background: #53bb74;
  }
  .color-half
  {
    background: #ebc85d;
  }
  .color-empty
  {
    background: #e5554e;
  }
  #countdown #tiles > span
  {
    width: 70px;
    max-width: 70px;
    padding: 18px 0;
    position: relative;
  }
  #countdown .labels
  {
    width: 100%;
    height: 25px;
    text-align: center;
    position: absolute;
    bottom: 8px;
  }
  #countdown .labels li
  {
    width: 102px;
    font: bold 15px 'Droid Sans', Arial, sans-serif;
    color: #f47321;
    text-shadow: 1px 1px 0px #000;
    text-align:
    text-transform:uppercase;
    display: inline-block;
  }
</style>

<input type="hidden" id="set-time" value="1">
<div id="countdown">
  <div class="color-full" id="tiles"></div>
  <div class="countdown-label">Time Remainings</div>
</div>

<script type="text/javascript">
  var minutes = $('#set-time').val();

  var target_date = new Date().getTime() + ((minutes * 60) * 1000);
  var time_limit = ((minutes * 60) * 1000);

  setTimeout
  (
    function()
    {
      alert('done');
    },time_limit
  );

  var days, hours, minutes, seconds;
  var countdown = document.getElementById("tiles");

  getCountdown();

  setInterval(function () { getCountdown(); }, 1000);

  function getCountdown()
  {
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;

    if (seconds_left >= 0)
    {
      console.log(time_limit);
      if ((seconds_left * 1000) < (time_limit / 2))
      {
        $('#tiles').removeClass('color-full');
        $('#tiles').addClass('color-half');
      }
      if ((seconds_left * 1000) < (time_limit / 4))
      {
        $('#tiles').removeClass('color-half');
        $('#tiles').addClass('color-empty');
      }

      days = pad(parseInt(seconds_left / 86400));
      seconds_left = seconds_left % 86400;

      hours = pad(parseInt(seconds_left / 3600));
      seconds_left = seconds_left % 3600;

      minutes = pad(parseInt(seconds_left / 60));
      seconds = pad(parseInt(seconds_left %60));

      countdown.innerHTML = "<span>" + hours + ":</span><span>" + minutes + ":</span><span>" + seconds + "</span>";
    }
  }
  function pad(n)
  {
    return (n < 10 ? '0' : '') + n;
  }
</script>
