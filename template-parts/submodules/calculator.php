<div class="calculator">
	<div class="grid">
		<div class="grid__column  grid__column--6  grid__column--l-3">
			<label class="calculator__label" for="calculator-income">Current Income</label>

			<div class="calculator__field">
				<select id="calculator-income" name="income" class="calculator__select">
					<option value="100000" selected>$100K</option>
					<option value="250000">$250K</option>
					<option value="500000">$500K</option>
					<option value="1000000">$1M</option>
					<option value="10000000">$10M</option>
				</select>

				<div class="calculator__value" data-calculator-field="income" role="presentation">
					$100K
				</div>
			</div>
		</div>

		<div class="grid__column  grid__column--6  grid__column--l-3">
			<label class="calculator__label" for="calculator-changes">No. of changes</label>

			<div class="calculator__field">
				<select id="calculator-changes" name="changes" class="calculator__select">
					<option value="20">20</option>
					<option value="26">26</option>
					<option value="40">40</option>
					<option value="52" selected>52</option>
				</select>

				<div class="calculator__value" data-calculator-field="changes" role="presentation">
					52
				</div>
			</div>
		</div>

		<div class="grid__column  grid__column--6  grid__column--l-3">
			<label class="calculator__label" for="calculator-increase">% Increase</label>

			<div class="calculator__field">
				<select id="calculator-increase" name="increase" class="calculator__select">
					<option value="3" selected>3%</option>
					<option value="5">5%</option>
					<option value="7">7%</option>
					<option value="10">10%</option>
				</select>

				<div class="calculator__value" data-calculator-field="increase" role="presentation">
					3%
				</div>
			</div>
		</div>

		<div class="grid__column  grid__column--6  grid__column--l-3">
			<div class="calculator__label">New Income</div>

			<div class="calculator__field  calculator__field--result">
				<div class="calculator__result  calculator__value">

				</div>
			</div>
		</div>
	</div>
</div>