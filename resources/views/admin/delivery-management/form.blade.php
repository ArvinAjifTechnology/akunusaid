<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="shipper">Shipper Name</label>
                <input type="text" class="form-control" id="shipper" name="shipper" required>
            </div>

            <div class="form-group">
                <label for="shipper_address">Shipper Address</label>
                <input type="text" class="form-control" id="shipper_address" name="shipper_address" required>
            </div>

            <div class="form-group">
                <label for="shipper_neighborhood">Shipper Neighborhood</label>
                <input type="text" class="form-control" id="shipper_neighborhood" name="shipper_neighborhood" required>
            </div>

            <div class="form-group">
                <label for="shipper_district">Shipper District</label>
                <input type="text" class="form-control" id="shipper_district" name="shipper_district" required>
            </div>

            <div class="form-group">
                <label for="city_code">City Code</label>
                <input type="text" class="form-control" id="city_code" name="city_code" required>
            </div>

            <div class="form-group">
                <label for="shipper_pos_code">Shipper Postal Code</label>
                <input type="text" class="form-control" id="shipper_pos_code" name="shipper_pos_code" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" class="form-control" id="destination" name="destination">
              </div>
              <div class="form-group">
                <label for="destination_address">Destination Address:</label>
                <input type="text" class="form-control" id="destination_address" name="destination_address">
              </div>
              <div class="form-group">
                <label for="destination_neighborhood">Destination Neighborhood:</label>
                <input type="text" class="form-control" id="destination_neighborhood" name="destination_neighborhood">
              </div>
              <div class="form-group">
                <label for="destination_district">Destination District:</label>
                <input type="text" class="form-control" id="destination_district" name="destination_district">
              </div>
              <div class="form-group">
                <label for="destination_city_code">Destination City Code:</label>
                <input type="text" class="form-control" id="destination_city_code" name="destination_city_code">
              </div>
              <div class="form-group">
                <label for="destination_pos_code">Destination Pos Code:</label>
                <input type="text" class="form-control" id="destination_pos_code" name="destination_pos_code">
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="type_id">Type ID:</label>
                <input type="text" class="form-control" id="type_id" name="type_id">
              </div>
              <div class="form-group">
                <label for="category_id">Category ID:</label>
                <input type="text" class="form-control" id="category_id" name="category_id">
              </div>
              <div class="form-group">
                <label for="qty">Quantity:</label>
                <input type="text" class="form-control" id="qty" name="qty">
              </div>
              <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="text" class="form-control" id="weight" name="weight">
              </div>
              <div class="form-group">
                <label for="cost">Cost:</label>
                <input type="text" class="form-control" id="cost" name="cost">
              </div>
              <div class="select2-drpdwn">
                <div class="form-group">
                    <label for="user_id">User:</label>
                    <select class="js-example-basic-single col-sm-12" id="user_id" name="user_id">
                    {{-- @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach --}}
                    <option value="arvin">arvin</option>
                    <option value="egha">Egha</option>
                    <option value="sita">Sita</option>
                    </select>
                </div>
              </div>

              <div class="form-group">
                <label for="date_receiped">Date Received:</label>
                <input type="text" class="form-control" id="date_receiped" name="date_receiped">
              </div>
              <div class="form-group">
                <label for="date_done">Date Done:</label>
                <input type="text" class="form-control" id="date_done" name="date_done">
              </div>
              <button type="submit" class="btn btn-primary mt-3 justify-end">Submit</button>
        </div>
    </div>
</div>
