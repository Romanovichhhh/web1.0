<div class="container">
    <form action="/test/send" method="POST" class="my-5">

        <h2 class="my-5">Test</h2>

        <div class="container p-5">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, blanditiis quisquam mollitia vitae consectetur magnam. Perferendis saepe quae recusandae, nihil a at, incidunt beatae sequi pariatur tempora suscipit ex consequatur.</p>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">1# Первый вопрос</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ответ" name = "task1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">2# Второй вопрос</label>
            <select name = "task2" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">3# Третий вопрос</label>
            <br>
            <input class="form-check-input" type="radio" name="task3" id="flexRadioDefault1" value="123">
            <label class="form-check-label" for="flexRadioDefault1">
                123
            </label>
            <br>
            <input class="form-check-input" type="radio" name="task3" id="flexRadioDefault1" value="abc">
            <label class="form-check-label" for="flexRadioDefault1">
                abc
            </label>
            <br>
            <input class="form-check-input" type="radio" name="task3" id="flexRadioDefault1" value="qwerty">
            <label class="form-check-label" for="flexRadioDefault1">
                qwerty
            </label>
        </div>

        <div class="row">
            <div class="col">
                <button class="btn btn-primary w-100" type="submit">Send</button>
            </div>
            <div class="col">
                <button class="btn btn-danger w-50" type="reset">Cancel</button>
            </div>
        </div>
    </form>

</div>

<div class="container p-5">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, blanditiis quisquam mollitia vitae consectetur magnam. Perferendis saepe quae recusandae, nihil a at, incidunt beatae sequi pariatur tempora suscipit ex consequatur.</p>
</div>