<template>
  <v-app>
    <v-container d-flex justify-center align-center>
      <v-card color="blue" height="500px" width="500px">
        <v-form>
          <v-text-field
            label="Lado"
            placeholder="Ejemplo 4"
            clearable
            v-model="lado"
          >
          </v-text-field>
          <v-text-field
            label="Apotema"
            placeholder="Ejemplo 2"
            clearable
            v-model="apotema"
          >
          </v-text-field>
          <v-btn @click="senData">Calcular</v-btn>
        </v-form>
        <v-card d-flex justify-center>
          <katex-element expression="A=4*L*ap="/>
          {{data}}
        </v-card>
      </v-card>
    </v-container>
  </v-app>
</template>

<script>
export default {
  name: 'App',
  data: () => {
    return {
      lado: null,
      apotema: null,
      anguloInterior: null,
      data: null
    }
  },
  methods: {
    senData: function() {
      // let access = this;
      let uri = "http://localhost:9090/calculador.php"
      let formData = {
        lado: this.lado,
        apotema: this.apotema,
        area: this.area
      }
      console.log(formData);
      this.$http.post(uri, formData).then(
        (response) => {
          let trueResponse = response.data;
          this.data = trueResponse;
        }
      )
    }
  }
};

</script>
