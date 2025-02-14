<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="calcbox">
            <h1 class="welcome">Simple Calculator</h1>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">First number: </label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Second number: </label>
                <input type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="d-flex justify-content-between gap-2">
                <button type="button" class="btn btn-secondary equation-btn">+</button>
                <button type="button" class="btn btn-secondary equation-btn">-</button>
                <button type="button" class="btn btn-secondary equation-btn">*</button>
                <button type="button" class="btn btn-secondary equation-btn">/</button>
            </div>
            <div class="calculateButton text-end">
                <button type="submit" class="calc btn-primary">Calculate</button>
            </div>
            </form>
        </div>
    </div>
</body>
<script>
    let selectedOperator = null;

    // Handle operator selection
    document.querySelectorAll(".equation-btn").forEach(button => {
        button.addEventListener("click", function () {
            if (this.classList.contains("active")) {
                // If clicked again, deselect
                this.classList.remove("active");
                selectedOperator = null; // Reset selected operator
            } else {
                // Remove 'active' class from all buttons
                document.querySelectorAll(".equation-btn").forEach(btn => btn.classList.remove("active"));
                // Set 'active' to the clicked button
                this.classList.add("active");
                selectedOperator = this.textContent; // Store the selected operator
            }
        });
    });

    // Handle calculation
    document.querySelector(".calc").addEventListener("click", function () {
        let num1 = parseFloat(document.getElementById("exampleInputEmail1").value);
        let num2 = parseFloat(document.getElementById("exampleInputPassword1").value);
        let result;

        if (isNaN(num1) || isNaN(num2)) {
            alert("Please enter valid numbers!");
            return;
        }

        if (!selectedOperator) {
            alert("Please select an operation!");
            return;
        }

        // Perform the operation
        switch (selectedOperator) {
            case "+":
                result = num1 + num2;
                break;
            case "-":
                result = num1 - num2;
                break;
            case "*":
                result = num1 * num2;
                break;
            case "/":
                if (num2 === 0) {
                    alert("Cannot divide by zero!");
                    return;
                }
                result = num1 / num2;
                break;
        }

        // Display result
        alert("Result: " + result);
    });
</script>


</html>