<x-app-layout>
    <x-slot name="header">
        <h1>
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <div class="content">
        <section>
            <h2 id="typography"><a class="permalink" href="#typography" title="Permalink to Typography">Typography</a>
            </h2>
            <div class="grid">
                <div class="flow">
                    <p>The typographical base is built on a 16px base (1rem) on a 1.2 modular scale. All font sizes are set
                       with rems and have custom line heights.</p>
                    <p>The fonts are Open Sans, with Fira Code for monospace. Fonts can be changed using CSS custom
                       properties.</p>
                    <p>Other semantic type tags like <a href="#">anchors</a>, <strong>strong</strong>, <em>emphasis</em>,
                        <u>underline</u>, <del>del</del>, <ins>ins</ins>, <mark>mark</mark>, <abbr title="abbreviation">abbr
                                                                                                                        with a title</abbr>, <q cite="example.com">q with cite</q> are all included.</p>
                    <p><code>&lt;address&gt;</code> is also supported:</p>
                    <address>
                        Name<br>
                        Street Address<br>
                        Phone Number<br>
                        Email Address<br>
                        Website<br>
                    </address>
                </div>
                <div class="flow">
                    <p class="txt-h1">Heading 1</p>
                    <p class="txt-h2">Heading 2</p>
                    <p class="txt-h3">Heading 3</p>
                    <p class="txt-h4">Heading 4</p>
                    <p class="txt-h5"">Heading 5</p>
                    <p class=" txt-h6">Heading 6</p>
                    <p>Paragraph</p>
                    <p><small>Small</small></p>
                </div>
            </div>
        </section>
        <section>
            <h2 id="lists"><a class="permalink" href="#lists" title="Permalink to Lists">Lists</a></h2>
            <p>Lists of the same type can be nested up to three times with different styles, and styles have been included
               for unordered lists, ordered lists, and definition lists.</p>
            <div class="grid">
                <div>
                    <ul>
                        <li>Item 1
                            <ul>
                                <li>Item 2.1
                                    <ul>
                                        <li>Item 2.1.1</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <ol>
                        <li>Item 1
                            <ol>
                                <li>Item 2.1
                                    <ol>
                                        <li>Item 2.1.1</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
                <div>
                    <dl>
                        <dt>Term</dt>
                        <dd>Description</dd>
                        <dt>Term</dt>
                        <dd>Description</dd>
                    </dl>
                </div>
            </div>
        </section>
        <section>
            <h2 id="blockquote"><a class="permalink" href="#blockquote" title="Permalink to Blockquote">Blockquote</a>
            </h2>
            <p>A blockquote can be created using the <code>&lt;blockquote&gt;</code> element, or by using the
                <code>.callout</code> class. Paragraph elements should be placed inside the blockquote element.</p>
            <blockquote>
                <p>Awesome quote</p>
            </blockquote>
        </section>
        <section>
            <h2 id="details-summary"><a class="permalink" href="#details-summary"
                                        title="Permalink to Details & Summary">Details & Summary</a></h2>
            <details class="accordion">
                <summary>I'm a summary</summary>
                <div class="details-content">Here is some details content. This accordion style is in the optional
                                             _components.css file and is used by adding the <code>.accordion</code> class to the
                    <code>&lt;details&gt;</code> element.</div>
            </details>
            <details>
                <summary>I'm a summary</summary>
                <div class="details-content">Here is some details content.</div>
            </details>
        </section>
        <section>
            <h2 id="code"><a class="permalink" href="#code" title="Permalink to Code">Code</a></h2>
            <p>Styles have been included for <code>&lt;code&gt;</code>, <code>&lt;samp&gt;</code>, and
                <kbd>&lt;kbd&gt;</kbd> elements. Code blocks can be made by wrapping a <code>&lt;code&gt;</code> element
               inside a <code>&lt;pre&gt;</code> element. Code blocks overflow automatically on the x axis in case there is
               not enough room for a line of code.</p>
            <pre><code>.some-class {
  background-color: blue;
}

&lt;!-- Remember every whitespace and break will be preserved in a &lt;pre&gt;, including indentation in your code. --&gt;</code></pre>
        </section>
        <section>
            <h2 id="buttons"><a class="permalink" href="#buttons" title="Permalink to Buttons">Buttons</a></h2>
            <p>Standard Buttons</p>
            <a class="button" href="#">Anchor button</a>
            <button>Button element</button>
            <input type="submit" value="Submit input">
            <input type="button" value="Button input">
            <p>Disabled</p>
            <a class="button" href="#" disabled tabindex="-1">Anchor button</a>
            <button class="button-primary" disabled>Button element</button>
            <input type="submit" value="submit input" disabled>
            <input class="button-primary" type="button" value="button input" disabled>
        </section>
        <section>
            <h2 id="forms"><a class="permalink" href="#forms" title="Permalink to Forms">Forms</a></h2>
            <form>
                <fieldset>
                    <legend>Fieldset</legend>
                    <div class="grid">
                        <div>
                            <label for="exampleEmailInput">Your email</label>
                            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                        </div>
                        <div>
                            <label for="exampleRecipientInput">Reason for contacting</label>
                            <select class="u-full-width" id="exampleRecipientInput">
                                <optgroup label="First group">
                                    <option value="Option 1">Questions</option>
                                    <option value="Option 2">Admiration</option>
                                </optgroup>
                                <optgroup label="Second group">
                                    <option value="Option 3">Can I get your number?</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <label for="exampleSearch">Search</label>
                    <input type="search" id="exampleSearch">
                </fieldset>

                <label for="dogs">How much do you like dogs?</label>
                <input type="range" id="dogs" name="dogs" min="9" max="10" step="0.1" value="10">

                <label for="exampleMessage" class="required">Message</label>
                <textarea class="u-full-width" placeholder="Hi Dave …" id="exampleMessage" required></textarea>

                <label for="exampleProgress">Progress</label>
                <progress id="exampleProgress" max="100" value="60"></progress>

                <label for="send-copy">
                    <input type="checkbox" name="example-checkbox-set" id="send-copy" value="send-copy">
                    Send a copy to yourself
                </label>

                <label for="radio-1">
                    <input type="radio" name="example-radio-set" id="radio-1" value="cats">
                    Cats
                </label>
                <label for="radio-2">
                    <input type="radio" name="example-radio-set" id="radio-2" value="dogs">
                    Dogs
                </label>

                <input class="button-primary" type="submit" value="Submit">

            </form>
        </section>
        <section>
            <h2 id="media"><a class="permalink" href="#media" title="Permalink to Media">Media</a></h2>
            <p>Images are given <code>display: block</code> and <code>max-width: 100%</code> by default. A video wrapper
               is provided for responsive embeds, and utilities are provided to control aspect ratio for images and video.
            </p>
            <audio controls src="/media/cc0-audio/t-rex-roar.mp3">
                Your browser does not support the
                <code>audio</code> element.
            </audio>
            <figure>
                <img src="https://i.picsum.photos/id/1020/4288/2848.jpg?hmac=Jo3ofatg0fee3HGOliAIIkcg4KGXC8UOTO1dm5qIIPc"
                     alt="Bear cubs in snowy mountains">
                <figcaption>Default Figure & Caption styles</figcaption>
            </figure>

            <div class="video-wrapper">
                <iframe width="1704" height="968" src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

        </section>
        <section>
            <h2 id="tables"><a class="permalink" href="#tables" title="Permalink to Tables">Tables</a></h2>
            <div class="table-wrapper">
                <table>
                    <caption>Caption</caption>
                    <thead>
                    <tr>
                        <th>Column A</th>
                        <th>Column B</th>
                        <th>Column C</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>A1</td>
                        <td>B1</td>
                        <td>C1</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>B2</td>
                        <td>C2</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>B3</td>
                        <td>C3</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

</x-app-layout>
