<h2>Listas</h2>
<h4>Listas normales</h4>
<row>
    <column>
        <ul class="list">
            <li>list 1</li>
            <li>list 2</li>
            <li>list 3</li>
            <li>list 4</li>
        </ul>
    </column>

    <column>
        <ul class="list is--circle">
            <li>is--circle 1</li>
            <li>is--circle 2</li>
            <li>is--circle 3</li>
            <li>is--circle 4</li>
        </ul>
    </column>

    <column>
        <ul class="list is--square">
            <li>is--square 1</li>
            <li>is--square 2</li>
            <li>is--square 3</li>
            <li>is--square 4</li>
        </ul>
    </column>
</row>

<br>

<row>
    <column>
        <ul class="list is--decimal">
            <li>is--decimal 1</li>
            <li>is--decimal 2</li>
            <li>is--decimal 3</li>
            <li>is--decimal 4</li>
        </ul>
    </column>

    <column>
        <ul class="list is--alpha">
            <li>is--alpha 1</li>
            <li>is--alpha 2</li>
            <li>is--alpha 3</li>
            <li>is--alpha 4</li>
        </ul>
    </column>

    <column>
        <ul class="list is--roman">
            <li>is--roman 1</li>
            <li>is--roman 2</li>
            <li>is--roman 3</li>
            <li>is--roman 4</li>
        </ul>
    </column>
</row>

<pre>
<code class="html hljs">
&lt;ul class=&quot;list is--circle&quot;&gt;
    &lt;li&gt;Circle 1&lt;/li&gt;
    &lt;li&gt;Circle 2&lt;/li&gt;
&lt;/ul&gt;
</code>
</pre>

<h4>Listas con iconos</h4>
<row>
    <column>
        <ul class="list">
            <li><icon class="check"></icon>Item 1</li>
            <li><icon class="check"></icon>Item 2</li>
            <li><icon class="check"></icon>Item 3</li>
            <li><icon class="check"></icon>Item 4</li>
        </ul>
    </column>

    <column>
        <ul class="list">
            <li><icon class="cloud-download"></icon>Item 1</li>
            <li><icon class="cloud-download"></icon>Item 2</li>
            <li><icon class="cloud-download"></icon>Item 3</li>
            <li><icon class="cloud-download"></icon>Item 4</li>
        </ul>
    </column>

    <column>
        <ul class="list">
            <li><icon class="exclamation"></icon>Item 1</li>
            <li><icon class="exclamation"></icon>Item 2</li>
            <li><icon class="exclamation"></icon>Item 3</li>
            <li><icon class="exclamation"></icon>Item 4</li>
        </ul>
    </column>
</row>

<pre>
<code class="html hljs">
&lt;ul class=&quot;list&quot;&gt;
    &lt;li&gt;&lt;icon class=&quot;check&quot;&gt;&lt;/icon&gt;Item 1&lt;/li&gt;
    &lt;li&gt;&lt;icon class=&quot;check&quot;&gt;&lt;/icon&gt;Item 2&lt;/li&gt;
&lt;/ul&gt;
</code>
</pre>

<h4>Sublistas</h4>
<row>


    <column>
        <ul class="list">
            <li>Item 1</li>
            <li>Item 2
                <ul>
                    <li>Item > Sub 1</li>
                    <li>Item > Sub 2</li>
                </ul>
            </li>
        </ul>
    </column>

    <column>
        <ul class="list is--decimal">
            <li>Item 1</li>
            <li>Item 2
                <ul>
                    <li>Item > Sub 1</li>
                    <li>Item > Sub 2</li>
                </ul>
            </li>
        </ul>
    </column>

    <column>
        <ul class="list is--roman">
            <li>Item 1</li>
            <li>Item 2
                <ul>
                    <li>Item > Sub 1</li>
                    <li>Item > Sub 2</li>
                </ul>
            </li>
        </ul>
    </column>
</row>

<pre>
<code class="html hljs">
&lt;ul class=&quot;list is--roman&quot;&gt;
    &lt;li&gt;Item 1&lt;/li&gt;
    &lt;li&gt;Item 2
        &lt;ul&gt;
            &lt;li&gt;Item &gt; Sub 1&lt;/li&gt;
            &lt;li&gt;Item &gt; Sub 2&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</code>
</pre>


<h4>Sublistas con iconos</h4>
<row>
    <column>
        <ul class="list">
            <li><icon class="check"></icon>Item 1</li>
            <li><icon class="check"></icon>Item 2
                <ul>
                    <li><icon class="check"></icon>Sub item 1</li>
                    <li><icon class="check"></icon>Sub item 2</li>
                </ul>
            </li>
        </ul>
    </column>
    <column>
        <ul class="list">
            <li><icon class="cloud-download"></icon>Item 1</li>
            <li><icon class="cloud-download"></icon>Item 2
                <ul>
                    <li><icon class="cloud-download"></icon>Sub item 1</li>
                    <li><icon class="cloud-download"></icon>Sub item 2</li>
                </ul>
            </li>
        </ul>
    </column>
    <column>
        <ul class="list">
            <li><icon class="exclamation"></icon>Item 1</li>
            <li><icon class="exclamation"></icon>Item 2
                <ul>
                    <li><icon class="exclamation"></icon>Sub item 1</li>
                    <li><icon class="exclamation"></icon>Sub item 2</li>
                </ul>
            </li>
        </ul>
    </column>
</row>

<pre>
<code class="html hljs">
&lt;ul class=&quot;list&quot;&gt;
    &lt;li&gt;&lt;icon class=&quot;check&quot;&gt;&lt;/icon&gt;Item 1&lt;/li&gt;
    &lt;li&gt;&lt;icon class=&quot;check&quot;&gt;&lt;/icon&gt;Item 2
        &lt;ul&gt;
            &lt;li&gt;&lt;icon class=&quot;check&quot;&gt;&lt;/icon&gt;Sub item 1&lt;/li&gt;
            &lt;li&gt;&lt;icon class=&quot;check&quot;&gt;&lt;/icon&gt;Sub item 2&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</code>
</pre>
