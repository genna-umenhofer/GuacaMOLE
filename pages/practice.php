<?php require '../includes/header.php'; ?>

<div class="top-margin top-padding bottom-padding">
  <div id="button-container" class="side-nav right-margin right-padding overflow">
    <button value="Moles">Moles</button>
    <button value="Solutions">Solutions</button>
    <button value="Ideal Gases">Ideal Gases</button>
    <button value="Atomic Mass">Atomic Mass</button>
    <button value="Stoichiometry">Stoichiometry</button>
    <button value="Half Life">Half Life</button>
  </div>

  <div class="container-practice">
    <article class="question-container bottom-margin right-padding">
      <section class="top-padding">
        <details id="details" open>
          <summary>
            <p id="question">Select a topic to see a question related to that topic. <br> Click "New Question" to get a different question.</p>
          </summary>
          <p id="answer">The answer will display here.</p>
          <p id="explanation">An explanation will display here.</p>
        </details>
      </section>
    </article>
    <div class="right-align">
      <button id="new-question-button">New Question</button>
    </div>
  </div>
</div>
<?php require '../includes/footer.php'; ?>