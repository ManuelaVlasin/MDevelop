<div>

    @if(count($subscriptions))
        <h3>Your Subscriptions</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Plan Name</th>
                <th scope="col">Subscription Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Trial Starts At</th>
                <th>Auto Renew</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subscriptions as $subscription)
                <tr>
                    <td>{{$subscription->plan->name}}</td>
                    <td>{{$subscription->name}}</td>
                    <td>{{$subscription->plan->price}}</td>
                    <td>{{$subscription->quantity}}</td>
                    <td>{{$subscription->created_at}}</td>
                    <td>
                        <label class="switch">
                            @if($subscription->ends_at)
                                <input type="checkbox" id="switcher" value="{{$subscription->name}}">
                            @else
                                <input type="checkbox" id="switcher" checked value="{{$subscription->name}}">
                            @endif
                            <span class="slider round"></span>
                        </label>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h4>You are not subscribed to any plan</h4>
    @endif
</div>

<style>
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var subscriptionName = $('#switcher').val();
        $('#switcher').click(function () {
            if ($(this).is(':checked')) {
                $.ajax({
                    url: '{{route("subscription.resume")}}',
                    data: {subscriptionName},
                    type: "GET",
                    success: function (response) {

                    },
                    error: function (response) {

                    }
                });
            } else {
                $.ajax({
                    url: '{{route("subscription.cancel")}}',
                    data: {subscriptionName},
                    type: "GET",
                    success: function (response) {
                        console.log(response)
                    },
                    error: function (response) {

                    }
                });
            }
        });
    });
</script>
