
# 🧩 Grifon - Grafo Interativo v3.6.0

**Grifon** é uma ferramenta interativa para criação, visualização e coloração total de grafos (vértices + arestas). Desenvolvida com HTML5, JavaScript e Cytoscape.js, ela permite explorar conceitos de teoria dos grafos de forma dinâmica e didática.

## ✨ Funcionalidades principais

- ✅ Criação, edição e exclusão de vértices e arestas  
- ✅ Grafo orientado / não orientado e ponderado / sem peso  
- ✅ Sistema de desfazer/refazer (Undo/Redo) com atalhos de teclado
- ✅ Coloração total:
  - **Vértices**: algoritmo de Welsh‑Powell melhorado
  - **Arestas**: round‑robin (para grafos completos ímpares) e algoritmo guloso otimizado (caso geral)
- ✅ Animações passo a passo da coloração total (com ajuste de velocidade)
- ✅ Modelos pré‑definidos (K5, P5, C5, K3,3, Grafo simples, Grafo de Margaridas)
- ✅ Salvamento e carregamento de grafos em arquivo `.txt`
- ✅ Menu de contexto (clique direito) para ações rápidas
- ✅ Painel de logs redimensionável com timestamp em tempo real
- ✅ Notificações toast para feedback visual de operações
- ✅ Suporte a loops e arestas curvas configuráveis
- ✅ Indicadores estatísticos em tempo real (densidade, grau médio, componentes conexas)
- ✅ Centralização automática no vértice atual durante animações

## 🎮 Atalhos de Teclado

| Atalho | Ação |
|--------|------|
| `Ctrl + Z` | Desfazer última ação |
| `Ctrl + Y` | Refazer ação desfeita |
| `Delete` | Remover elemento selecionado |
| `Escape` | Cancelar criação de aresta / Desselecionar |
| `Clique direito` | Abrir menu de contexto |
| `Duplo clique na aresta` | Editar peso (modo ponderado) |

## 🚀 Como executar

1. Baixe todos os arquivos do diretório (`index.html`, `img/grifon.png`, etc.) ou clone o repositório.
2. Abra o arquivo **`index.html`** em qualquer navegador moderno (Chrome, Firefox, Edge, etc.).
3. A interface será carregada imediatamente – não é necessário servidor web.

## 🗂️ Modelos e dados

A aplicação já vem com vários **grafos pré‑definidos**, acessíveis pelo seletor na sidebar:

| Modelo | Descrição | Vértices | Arestas |
|--------|-----------|----------|---------|
| **K5** | Grafo completo com 5 vértices | 5 | 10 |
| **P5** | Caminho simples com 5 vértices | 5 | 4 |
| **C5** | Ciclo com 5 vértices | 5 | 5 |
| **K3,3** | Grafo bipartido completo | 6 | 9 |
| **Simples** | Quadrado com diagonal | 4 | 5 |
| **Margaridas** | Grafo orientado complexo | 20 | 40 |

Você também pode **criar seu próprio grafo** do zero ou importar modelos salvos anteriormente.

Os arquivos de exemplo (formato `.txt`) podem ser encontrados na pasta **`/data`**.  
Para usá‑los, clique em **"Arquivo .txt" → Carregar** e selecione o arquivo desejado.

### Formato do arquivo `.txt`:
```
V E
orientado ponderado
origem destino [peso]
...
---
vértice x y
...
```

## 🎨 Algoritmos de Coloração

### Vértices - Welsh-Powell Melhorado
- Ordena vértices por grau decrescente
- Atribui a primeira cor disponível não usada por vizinhos
- Complexidade: O(V²)
- Garantia: usa no máximo Δ+1 cores

### Arestas - Round-Robin (Grafos Completos Ímpares)
- Algoritmo específico para K_n com n ímpar
- Organiza vértices em círculo com rotação
- Resultado ótimo garantido: χ'(K_n) = n

### Arestas - Guloso Otimizado (Caso Geral)
- Constrói mapa de incidência entre arestas
- Ordena por grau de restrições
- Complexidade: O(E²)
- Resultado dentro do limite de Vizing: Δ ≤ χ' ≤ Δ+1

## 📊 Limites e Performance

| Parâmetro | Valor | Observação |
|-----------|-------|------------|
| Vértices máximos | 200 | Otimizado para uso educacional |
| Limite seguro | 500 | Para computadores com 8GB+ RAM |
| Algoritmo guloso | Até 5000 arestas | Acima disso, usar algoritmo rápido |

## 🧪 Tecnologias utilizadas

- [Cytoscape.js](https://js.cytoscape.org/) – renderização e manipulação do grafo
- [Bootstrap 5.3](https://getbootstrap.com/) – interface responsiva e componentes
- [Bootstrap Icons 1.11](https://icons.getbootstrap.com/) – ícones
- JavaScript puro (ES6+) – lógica dos algoritmos

## 🏆 Resultados Testados

| Grafo | χ Vértices | χ' Arestas | Status |
|-------|------------|------------|--------|
| K5 | 5 ✅ | 5 ✅ | Ótimo |
| K3,3 | 2 ✅ | 4 ✅ | Vizing |
| C5 | 3 ✅ | 3 ✅ | Ótimo |
| P5 | 2 ✅ | 2 ✅ | Ótimo |
| Quadrado+Diagonal | 3 ✅ | 3 ✅ | Ótimo |
| Petersen | 3 ✅ | 4 ✅ | Ótimo |

## 📄 Licença

Este projeto foi desenvolvido como trabalho acadêmico para a disciplina **Algoritmos em Grafos**.  
Sinta‑se à vontade para usar, estudar ou modificar o código.

---

**Desenvolvido por Jailis Dourado**  
*Grifon v3.6.0 – Colorindo grafos com precisão e desempenho* 🎨
