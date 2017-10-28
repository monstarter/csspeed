<h2>Grid</h2>
<h4>Funcionamiento del grid</h4>
<p>CSS SPEED usa un sitema de filas y columnas para construir layouts. Este sistema trabaja con 12 columnas como base.</p>
<p>Para comprender como funciona, imaginemos que la página web esta dividida en 12 columnas que equivalen al 100% de ancho de la página.</p>

<div class="grid-example">
    <row>
        <column class="mobile--12 tablet--12 desktop--12"><div><strong>100% = 12 columnas</strong></div></column>
    </row>

    <row>
        <column class="mobile--1 tablet--1 desktop--1"><div>1</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>2</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>3</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>4</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>5</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>6</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>7</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>8</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>9</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>10</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>11</div></column>
        <column class="mobile--1 tablet--1 desktop--1"><div>12</div></column>
    </row>
</div>

<p>Siempre recordando que la sumatoria de cada fila debe dar <strong>12</strong>. Entonces si quisieramos tener 2 columnas que midan justo la mitad del sitio, podemos hacer algo como esto ya que <strong>6 + 6 = 12</strong>:</p>
<div class="grid-example">
    <row>
        <column class="mobile--6 tablet--6 desktop--6"><div>6</div></column>
        <column class="mobile--6 tablet--6 desktop--6"><div>6</div></column>
    </row>
</div>

<p>Se puede jugar con el tamaño de las columnas hasta obtener el diseño deseado:</p>
<div class="grid-example">
    <row>
        <column class="mobile--12 tablet--11 desktop--11"><div>11</div></column>
        <column class="mobile--12 tablet--1 desktop--1"><div>1</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--10 desktop--10"><div>10</div></column>
        <column class="mobile--12 tablet--2 desktop--2"><div>2</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--9 desktop--9"><div>9</div></column>
        <column class="mobile--12 tablet--3 desktop--3"><div>3</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--8 desktop--8"><div>8</div></column>
        <column class="mobile--12 tablet--4 desktop--4"><div>4</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--7 desktop--7"><div>7</div></column>
        <column class="mobile--12 tablet--5 desktop--5"><div>5</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--6 desktop--6"><div>6</div></column>
        <column class="mobile--12 tablet--6 desktop--6"><div>6</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--5 desktop--5"><div>5</div></column>
        <column class="mobile--12 tablet--7 desktop--7"><div>7</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--4 desktop--4"><div>4</div></column>
        <column class="mobile--12 tablet--8 desktop--8"><div>8</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--3 desktop--3"><div>3</div></column>
        <column class="mobile--12 tablet--9 desktop--9"><div>9</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--2 desktop--2"><div>2</div></column>
        <column class="mobile--12 tablet--10 desktop--10"><div>10</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--1 desktop--1"><div>1</div></column>
        <column class="mobile--12 tablet--11 desktop--11"><div>11</div></column>
    </row>
    <row>
        <column class="mobile--12 tablet--12 desktop--12"><div>12</div></column>
    </row>
    <row>
        <column class="mobile--2 tablet--2 desktop--2"><div>2</div></column>
        <column class="mobile--3 tablet--3 desktop--3"><div>3</div></column>
        <column class="mobile--4 tablet--4 desktop--4"><div>4</div></column>
        <column class="mobile--3 tablet--3 desktop--3"><div>3</div></column>
    </row>
</div>

<h4>Sintaxis del grid</h4>
<p>Este sistema controla el comportamiento de las columnas en todos los <strong><a href="#breakpoints">Breackpoints</a></strong> disponibles para facilitar el diseño responsivo. Por lo que se debe declarar siempre el ancho para los 4 tamaños (Mobile, Tablet, Desktop).</p>
<p>En el ejemplo siguiente, cuando la pantalla sea <b>"mobile"</b> la columna mide 12, cuando sea <b>"tablet"</b> las columnas miden 6, cuando sea <b>"desktop"</b> o <b>"widescreen"</b> medirán 8 y 4 respectivamente. Se puede comprobar redimensionando esta ventana del navegador.</p>
<div class="grid-example">
    <row>
        <column class="mobile--12 tablet--6 desktop--8">
            <div>Soy responsivo</div>
        </column>
        <column class="mobile--12 tablet--6 desktop--4">
            <div>Soy responsivo</div>
        </column>
    </row>
</div>

<pre>
<code class="html hljs">
&lt;row&gt;
    &lt;column class=&quot;mobile--12 tablet--6 desktop--8 &quot;&gt;Soy responsivo&lt;/column&gt;
    &lt;column class=&quot;mobile--12 tablet--6 desktop--4 &quot;&gt;Soy responsivo&lt;/column&gt;
&lt;/row&gt;
</code>
</pre>

<!-- Auto row -->
<h4>Columnas automáticas</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio facere unde natus cumque, rem sed recusandae voluptates error. Quibusdam quaerat distinctio eligendi, vero quos doloribus. Doloribus adipisci praesentium perspiciatis.</p>
<div class="grid-example">
    <row>
        <column>
            <div>Auto</div>
        </column>
        <column>
            <div>Auto</div>
        </column>
        <column>
            <div>Auto</div>
        </column>
        <column>
            <div>Auto</div>
        </column>
    </row>
</div>

<pre>
<code class="html hljs">
&lt;row&gt;
    &lt;column&gt;Auto&lt;/column&gt;
    &lt;column&gt;Auto&lt;/column&gt;
    &lt;column&gt;Auto&lt;/column&gt;
    &lt;column&gt;Auto&lt;/column&gt;
&lt;/row&gt;
</code>
</pre>

<!-- Offset row -->
<h4>Grid offset</h4>
<p>Por defecto, todas las columnas se alinean a la izquierda, pero es posible invertirlas, basta con colocar la clase <strong>.offset</strong> para alinearlas a la derecha.</p>
<div class="grid-example">
    <row>
        <column class="mobile--6">
            <div>6</div>
        </column>
    </row>
    <row>
        <column class="mobile--6 is--offset">
            <div>6 offset</div>
        </column>
    </row>
</div>

<pre>
<code class="html hljs">
&lt;row&gt;
    &lt;column class=&quot;mobile--6 tablet--6 desktop--6 &quot;&gt;6&lt;/column&gt;
&lt;/row&gt;
<br>
&lt;row&gt;
    &lt;column class=&quot;mobile--6 tablet--6 desktop--6 is--offset&quot;&gt;6 offset&lt;/column&gt;
&lt;/row&gt;
</code>
</pre>