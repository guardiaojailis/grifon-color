# 🧩 Grifon - Grafo Interativo v3.5.0

**Grifon** é uma ferramenta interativa para criação, visualização e coloração total de grafos (vértices + arestas). Desenvolvida com HTML5, JavaScript e Cytoscape.js, ela permite explorar conceitos de teoria dos grafos de forma dinâmica e didática.

## ✨ Funcionalidades principais

- ✅ Criação, edição e exclusão de vértices e arestas  
- ✅ Grafo orientado / não orientado e ponderado / sem peso  
- ✅ Coloração total:
  - **Vértices**: algoritmo de Welsh‑Powell melhorado
  - **Arestas**: round‑robin (para grafos completos ímpares) e algoritmo guloso (caso geral)
- ✅ Animações passo a passo da coloração total (ajuste de velocidade)
- ✅ Modelos pré‑definidos (K5, P5, C5, K3,3, Grafo simples, Margaridas)
- ✅ Salvamento e carregamento de grafos em arquivo `.txt`
- ✅ Menu de contexto (clique direito) para ações rápidas
- ✅ Painel de logs redimensionável e com timestamp

## 🚀 Como executar

1. Baixe todos os arquivos do diretório (`index.html`, `img/grifon.png`, etc.) ou clone o repositório.
2. Abra o arquivo **`index.html`** em qualquer navegador moderno (Chrome, Firefox, Edge, etc.).
3. A interface será carregada imediatamente – não é necessário servidor web.

## 🗂️ Modelos e dados

A aplicação já vem com vários **grafos pré‑definidos**, acessíveis pelo seletor na sidebar.  
Você também pode **criar seu próprio grafo** do zero ou importar modelos salvos anteriormente.

Os arquivos de exemplo (formato `.txt`) podem ser encontrados na pasta **`/data`**.  
Para usá‑los, clique em **“Arquivo .txt” → Carregar** e selecione o arquivo desejado.

## 🧪 Tecnologias utilizadas

- [Cytoscape.js](https://js.cytoscape.org/) – renderização e manipulação do grafo
- [Bootstrap 5](https://getbootstrap.com/) – interface responsiva e componentes
- [Bootstrap Icons](https://icons.getbootstrap.com/) – ícones
- JavaScript puro (ES6+) – lógica dos algoritmos

## 📄 Licença

Este projeto foi desenvolvido como trabalho acadêmico para a disciplina **Algoritmos em Grafos**.  
Sinta‑se à vontade para usar, estudar ou modificar o código.

---

**Desenvolvido por Jailis Dourado**  
*Grifon – Colorindo grafos com precisão e desempenho* 🎨
