<div>
    <form method="POST" action="{{route('plans.store')}}">
        @csrf
        <div class="form-group">
            <label>Plan Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Email">
        </div>

        <div class="form-group">
            <label>Amount</label>
            <input type="number" name="amount" class="form-control" placeholder="">
        </div>

        <div class="form-group">
            <label>Currency</label>
            <input type="text" name="currency" class="form-control" placeholder="">
        </div>

        <div class="form-group">
            <label>Interval Count</label>
            <input type="number" name="interval_count" class="form-control" placeholder="">
        </div>

        <div class="form-group">
            <label>Billing Period</label>
            <select name="billing_period" class="form-control">
                <option disabled selected>Choose billing method</option>
                <option value="week">Weekly</option>
                <option value="month">Monthly</option>
                <option value="year">Yearly</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>
