<div>
    <p>Title: "{{ $title }}"</h1>

    <div x-data="{ count: 0 }">
        <h1>Contador: <span x-text="count"></span></h1>
        
        <button @click="count++">Incrementar</button>
        <button @click="count--" :disabled="count <= 0">Decrementar</button>
        <button @click="count = 0">Reiniciar</button>
    </div>
</div>