<template>
  <div class="articles-container">
    <div
      v-for="article in articles"
      :key="article.id"
      class="card"
      @click="viewArticle(article.id)"
    >
      <img
        :src="article.image_path"
        alt="Image de l'article"
        class="card-image"
      />
      <div class="card-content">
        <h3 class="card-title">{{ article.title }}</h3>
        <p class="card-summary">{{ article.summary }}</p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';  

const articles = ref([]);
const router = useRouter();

const fetchArticles = async () => {
  try {
    const response = await axios.get('http://localhost:8000/api/articles');
    articles.value = response.data; // Les données sont déjà en JSON dans `response.data`
  } catch (error) {
    console.error('Error fetching articles:', error);
  }
};

const viewArticle = (id) => {
  router.push(`/articles/${id}`);
};

onMounted(fetchArticles);
</script>

<style scoped>
/* Container de toutes les cartes */
.articles-container {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
  padding: 20px;
  justify-content: space-between;
}

/* Style de chaque carte */
.card {
  width: 300px;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  cursor: pointer;
  transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
}

/* Image de la carte */
.card-image {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

/* Contenu de la carte */
.card-content {
  padding: 16px;
}

/* Titre de l'article */
.card-title {
  font-size: 1.25rem;
  font-weight: bold;
  color: #333;
  margin: 0;
}

/* Résumé de l'article */
.card-summary {
  font-size: 0.875rem;
  color: #777;
  margin-top: 8px;
  height: 40px;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
