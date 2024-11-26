<template>
    <div class="article-detail">
      <h2>{{ article.title }}</h2>
      <img :src="article.image_path" alt="Article Image" />
      <p>{{ article.content }}</p> <!-- Assurez-vous que le champ 'content' existe dans vos données -->
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  
  const props = defineProps({
    id: {
      type: String,
      required: true,
    },
  });
  
  const article = ref(null);
  
  const fetchArticle = async () => {
    try {
      const response = await axios.get(`http://localhost:8000/api/articles/${props.id}`);
      article.value = response.data;
    } catch (error) {
      console.error('Error fetching article:', error);
    }
  };
  
  onMounted(fetchArticle);
  </script>
  
  <style scoped>
  /* Ajoutez ici des styles pour le détail de l'article */
  </style>
  