  <div class="w3-row">
    <div class="w3-col m7" style="margin-left: 20%;">
      <div class="w3-container w3-card w3-white w3-round w3-margin w3-animate-left"><br>
          <p>You have donated RM <?php echo $data[6]; ?> to <?php echo $data[3]; ?></p>
        <details id="details">
          <summary>Show Details</summary>
            <table style="width:50%;">
              <tr>
                <th hidden>ToyyiPay</th>
                <th hidden>Details</th>
              </tr>
              <tr>
                <td><b class="pay">Toyyi</b><b class="Pay">Pay</b></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>:&emsp;<b class="success">Successful</b></td>
              </tr>
              <tr>
                <td>Transaction ID</td>
                <td>:&emsp;<b><?php echo $data[0]; ?></b></td>
              </tr>
              <tr>
                <td>Transaction Date</td>
                <td>:&emsp;<b><?php echo $data[8]; ?></b></td>
              </tr>
              <tr>
                <td>Amount</td>
                <td>:&emsp;<b>RM<?php echo $data[6]; ?></b></td>
              </tr>
              <tr>
                <td>Receiver Name</td>
                <td>:&emsp;<b><?php echo $data[3]; ?></b></td>
              </tr>
              <tr>
                <td>Receiver Phone Number</td>
                <td>:&emsp;<b><?php echo $data[5]; ?></b></td>
              </tr>

            </table>
        </details>
        <br>
      </div>
    </div>
  </div>
