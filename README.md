
# 🧩 Grifon - Grafo Interativo v3.6.1

**Grifon** é uma ferramenta interativa para criação, visualização e **coloração total de grafos** (vértices + arestas). Desenvolvida com HTML5, JavaScript e Cytoscape.js, ela permite explorar conceitos de teoria dos grafos de forma dinâmica e didática, respeitando todas as três restrições da coloração total.

## ✨ Funcionalidades principais

- ✅ Criação, edição e exclusão de vértices e arestas  
- ✅ Grafo orientado / não orientado e ponderado / sem peso  
- ✅ Sistema de desfazer/refazer (Undo/Redo) com atalhos de teclado (Ctrl+Z / Ctrl+Y)
- ✅ **Coloração Total Unificada** (vértices + arestas simultaneamente):
  - **Vértices**: algoritmo de Welsh‑Powell melhorado
  - **Arestas**: round‑robin (para grafos completos ímpares) e algoritmo guloso otimizado (caso geral)
  - **Garantia**: vértice NUNCA compartilha cor com aresta incidente
- ✅ Animações passo a passo da coloração total (com ajuste de velocidade de 100ms a 2000ms)
- ✅ Modelos pré‑definidos (K5, P5, C5, K3,3, Grafo simples, Grafo de Margaridas)
- ✅ Salvamento e carregamento de grafos em arquivo `.txt`
- ✅ Menu de contexto (clique direito) para ações rápidas
- ✅ Painel de logs redimensionável com timestamp em tempo real
- ✅ Notificações toast para feedback visual de operações
- ✅ Suporte a loops e arestas curvas configuráveis
- ✅ Indicadores estatísticos em tempo real (densidade, grau médio, componentes conexas)
- ✅ Centralização automática no vértice atual durante animações
- ✅ Paleta de cores otimizada com máximo contraste visual

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

| Modelo | Descrição | Vértices | Arestas | χ (vértices) | χ' (arestas) |
|--------|-----------|----------|---------|--------------|--------------|
| **K5** | Grafo completo com 5 vértices | 5 | 10 | 5 | 5 |
| **P5** | Caminho simples com 5 vértices | 5 | 4 | 2 | 2 |
| **C5** | Ciclo com 5 vértices | 5 | 5 | 3 | 3 |
| **K3,3** | Grafo bipartido completo | 6 | 9 | 2 | 3 |
| **Simples** | Quadrado com diagonal | 4 | 5 | 3 | 3 |
| **Margaridas** | Grafo orientado complexo | 20 | 40 | 2 | 10 |

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

## 🎨 Algoritmos de Coloração Total Unificada

### Coloração Total (Vértices + Arestas)
O algoritmo unificado processa vértices e arestas **simultaneamente**, respeitando todas as três restrições:

| Restrição | Como é garantida |
|-----------|------------------|
| **1. Vértices adjacentes** | Welsh-Powell clássico |
| **2. Arestas adjacentes** | Mapa de incidência entre arestas |
| **3. Vértice ≠ aresta incidente** | Verificação cruzada no loop de coloração |

### Casos Especiais Detectados Automaticamente

| Tipo de grafo | Algoritmo utilizado | Resultado |
|---------------|---------------------|-----------|
| **Kₙ com n ímpar** (ex: K5, K3) | Round-Robin para arestas + Welsh-Powell | Ótimo: n cores nas arestas |
| **K3,3** (bipartido completo) | Esquema de diagonais | Ótimo: 2 cores vértices, 3 cores arestas |
| **Demais grafos** | Algoritmo guloso unificado | Dentro do limite de Vizing: Δ ≤ χ' ≤ Δ+1 |

### Complexidade
- **Welsh-Powell (vértices):** O(V²)
- **Round-Robin (arestas):** O(V²)
- **Guloso (arestas, caso geral):** O(E²)
- **Coloração total unificada:** O((V+E)²)

## 📊 Limites e Performance

| Parâmetro | Valor | Observação |
|-----------|-------|------------|
| Vértices máximos | 200 | Otimizado para uso educacional |
| Arestas máximas (pior caso) | ~20.000 | Para K₂₀₀ |
| Tempo de coloração (K₂₀₀) | ≈800ms | Algoritmo guloso |
| Consumo de memória (K₂₀₀) | ≈50 MB | Navegadores modernos suportam |

## 🧪 Tecnologias utilizadas

- [Cytoscape.js](https://js.cytoscape.org/) – renderização e manipulação do grafo
- [Bootstrap 5.3](https://getbootstrap.com/) – interface responsiva e componentes
- [Bootstrap Icons 1.11](https://icons.getbootstrap.com/) – ícones
- JavaScript puro (ES6+) – lógica dos algoritmos

## 🏆 Resultados Testados

| Grafo | χ (vértices) | χ' (arestas) | Coloração total válida | Status |
|-------|--------------|--------------|------------------------|--------|
| **K5** | 5 ✅ | 5 ✅ | ✅ (n+1 cores) | Ótimo |
| **K3,3** | 2 ✅ | 3 ✅ | ✅ (2+3=5 cores) | Ótimo |
| **C5** | 3 ✅ | 3 ✅ | ✅ (3+3=6 cores) | Ótimo |
| **P5** | 2 ✅ | 2 ✅ | ✅ (2+2=4 cores) | Ótimo |
| **Quadrado+Diagonal** | 3 ✅ | 3 ✅ | ✅ (3+3=6 cores) | Ótimo |

## 📄 Licença

Este projeto foi desenvolvido como trabalho acadêmico para a disciplina **Algoritmos em Grafos** (7º período, Instituto Federal Goiano).  
Sinta‑se à vontade para usar, estudar ou modificar o código.

---

**Desenvolvido por Jailis Dourado**  
*Grifon v3.6.1 – Coloração Total Unificada: Vértices e Arestas em Harmonia* 🎨

---

## 🔗 Repositório

[github.com/guardiaojailis/grifon-color](https://github.com/guardiaojailis/grifon-color/tree/main)
